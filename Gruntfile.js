module.exports = function(grunt) {

	var jsFileList = [
		'assets/js/bootstrap/transition.js',
		'assets/js/bootstrap/alert.js',
		'assets/js/bootstrap/button.js',
		'assets/js/bootstrap/carousel.js',
		'assets/js/bootstrap/collapse.js',
		'assets/js/bootstrap/dropdown.js',
		'assets/js/bootstrap/modal.js',
		'assets/js/bootstrap/tooltip.js',
		'assets/js/bootstrap/popover.js',
		'assets/js/bootstrap/scrollspy.js',
		'assets/js/bootstrap/tab.js',
		'assets/js/bootstrap/affix.js',
		'assets/js/alienship-helper.js',
	];

	// 1. All configuration goes here
	grunt.initConfig({
		pkg: grunt.file.readJSON('package.json'),

		// Combine our javascript files into one
		concat: {
			dist: {
				src: [jsFileList],
				dest: 'assets/js/scripts.js',
			}
		},

		// Minify javascript
		uglify: {
			build: {
				src: 'assets/js/scripts.js',
				dest: 'assets/js/scripts.min.js'
			}
		},

		sass: {
			dist: {
				options: {
					style: 'expanded'
				},
				files: {
					'style.css': 'assets/sass/style.scss'
				}
			}
		},

		autoprefixer: {
			options: {
				browsers: ['last 2 versions', 'Firefox ESR', 'Opera 12.1', 'ie 9', 'android 2.3', 'android 4']
			},
			single_file: {
				src: 'style.css',
				dest: 'style.css'
			}
		},

		cssmin: {
			combine: {
				files: {
					'style.min.css': ['style.css']
				}
			}
		},

		watch: {

			scripts: {
				files: ['assets/js/*.js'],
				tasks: ['concat', 'uglify'],
				options: {
					spawn: false,
				},
			},

			css: {
				files: ['assets/sass/*.scss', 'assets/sass/theme/*.scss'],
				tasks: ['sass', 'autoprefixer', 'cssmin'],
			},

			livereload: {
				options: {
					livereload: true
				},
				files: [
					'style.css',
					'style.min.css'
				]
			},

		},
		
		copy: {
			main: {
				files: [
				    // Copy theme files
				    { expand: true, src: ['*', '!.gitignore', '!Gruntfile.js'], dest: '../deploy/', filter: 'isFile' },
				    { expand: true, cwd: 'templates/', src: ['**'], dest: '../deploy/templates/' },
				    { expand: true, cwd: 'inc/', src: ['**'], dest: '../deploy/inc/' },
				    // Copy assets
				    { expand: true, cwd: 'assets/fonts/', src: ['**'], dest: '../deploy/fonts/' },
				    { expand: true, cwd: 'assets/images/', src: ['**'], dest: '../deploy/img/' },				    
				    { expand: true, cwd: 'assets/js', src: ['alienship-helper.js', 'customizer.js', 
				                                            'html5shiv.min.js', 'scripts.min.js'], dest: '../deploy/js/'},
				    // Copy other stuff
				    { expand: true, cwd: 'languages/', src: ['**'], dest: '../deploy/languages/' },
				    { expand: true, cwd: 'child_theme/', src: ['**'], dest: '../deploy/child_theme/' },
				]
			}
		},
		
		upload: {
			
		}

	});

	// 3. Where we tell Grunt we plan to use this plug-in.
	grunt.loadNpmTasks('grunt-contrib-concat');
	grunt.loadNpmTasks('grunt-contrib-uglify');
	grunt.loadNpmTasks('grunt-contrib-sass');
	grunt.loadNpmTasks('grunt-contrib-cssmin');
	grunt.loadNpmTasks('grunt-autoprefixer');
	grunt.loadNpmTasks('grunt-contrib-watch');	
	grunt.loadNpmTasks('grunt-contrib-copy');


	// 4. Where we tell Grunt what to do when we type "grunt" into the terminal.
	grunt.registerTask('default', ['concat', 'uglify', 'sass', 'cssmin', 'autoprefixer', 'watch']);
	
	grunt.registerTask('release', ['concat', 'uglify', 'sass', 'cssmin', 'autoprefixer', 'copy:main']);
	grunt.registerTask('deploy', ['release', 'upload'])

};
