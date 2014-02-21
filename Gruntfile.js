module.exports = function(grunt) {

	// Project configuration.
	grunt.initConfig({
		pkg: grunt.file.readJSON('package.json'),

		watch: {
			admin_less: {
				files: ['app/assets/less/admin.less'],
				tasks: ['admin-css'],
			},
			frontend_less: {
				files: ['app/assets/less/frontend.less', 'app/assets/less/frontend-prepend.less'],
				tasks: ['frontend-css'], // 'less:frontend', 'autoprefixer:frontend', 'concat:frontend_css'
			},
			admin_js: {
				files: ['app/assets/js/admin.js'],
				tasks: ['concat:admin'],
			},
			frontend_js: {
				files: ['app/assets/js/main.js', 'app/assets/js/modernizr-custom.js'],
				tasks: ['concat:frontend'],
			}
		},

		concat: {
			// options: {
			// 	separator: ';'
			// },
			admin: {
				src: [
					// Libraries
					'app/assets/lib/jquery-fileupload/js/vendor/jquery.ui.widget.js',
					'app/assets/lib/jquery-fileupload/js/jquery.iframe-transport.js',
					'app/assets/lib/jquery-fileupload/js/jquery.fileupload.js',

					// Main JS file
					'app/assets/js/admin.js',

					// Bootstrap JS files
					// 'vendor/twbs/bootstrap/js/affix.js',
					'vendor/twbs/bootstrap/js/alert.js',
					'vendor/twbs/bootstrap/js/button.js',
					// 'vendor/twbs/bootstrap/js/carousel.js',
					'vendor/twbs/bootstrap/js/collapse.js',
					'vendor/twbs/bootstrap/js/dropdown.js',
					'vendor/twbs/bootstrap/js/modal.js',
					// 'vendor/twbs/bootstrap/js/tooltip.js',
					// 'vendor/twbs/bootstrap/js/popover.js',
					// 'vendor/twbs/bootstrap/js/scrollspy.js',
					// 'vendor/twbs/bootstrap/js/tab.js',
					'vendor/twbs/bootstrap/js/transition.js',
				],
				dest: 'public/assets-dev/js/admin.js'
			},
			frontend: {
				src: [
					'app/assets/lib/modernizr.js',
					'app/assets/js/main.js'
				],
				dest: 'public/assets-dev/js/main.js'
			},
			frontend_css: {
				src: [
					'app/assets/less/build/frontend-prepend.css',
					'app/assets/less/build/frontend.css'
				],
				dest: 'public/assets-dev/css/frontend.css'
			}
		},

		uglify: {
			// options: {
			// 	banner: '/*! <%= pkg.name %> <%= grunt.template.today("yyyy-mm-dd") %> */\n'
			// },
			dist: {
				files: [
					{
						expand: true,
						cwd: 'public/assets-dev/js',
						src: ['*.js'],
						dest: 'public/assets/js/'
						// ext: '.min.js'
					}
				]
			}
		},

		less: {
			admin: {
				options: {
					compress: false
				},
				files: {
					'public/assets-dev/css/admin.css': 'app/assets/less/admin.less'
				}
			},
			frontend: {
				options: {
					compress: false
				},
				files: {
					'app/assets/less/build/frontend-prepend.css': 'app/assets/less/frontend-prepend.less',
					'app/assets/less/build/frontend.css': 'app/assets/less/frontend.less'
				}
			}
		},

		autoprefixer: {
			options: {
				browsers: ['last 2 version', 'Firefox >= 10', 'Safari >= 5', 'Chrome >= 12', 'Explorer >= 8', 'Android >= 4']
			},
			frontend: {
				src: 'app/assets/less/build/frontend.css',
				dest: 'app/assets/less/build/frontend.css'
			},
			admin: {
				src: 'public/assets-dev/css/admin.css',
				dest: 'public/assets-dev/css/admin.css'
			}
		},

		copy: {
			// Copy Bootstrap font files to public folders
			bootstrap: {
				files: [
					{
						expand: true,
						src: ['vendor/twbs/bootstrap/dist/fonts/*'],
						dest: 'public/assets/fonts/',
						filter: 'isFile',
						flatten: true
					},
					{
						expand: true,
						src: ['vendor/twbs/bootstrap/dist/fonts/*'],
						dest: 'public/assets-dev/fonts/',
						filter: 'isFile',
						flatten: true
					}
				]
			}
		},

		clean: ['app/assets/less/build'],

		cssmin: {
			dist: {
				expand: true,
				cwd: 'public/assets-dev/css/',
				src: ['*.css'],
				dest: 'public/assets/css/'
				// ext: '.min.css'
			}
		}

	});

	// Load plugins
	grunt.loadNpmTasks('grunt-contrib-watch');
	grunt.loadNpmTasks('grunt-contrib-uglify');
	grunt.loadNpmTasks('grunt-contrib-concat');
	grunt.loadNpmTasks('grunt-contrib-less');
	grunt.loadNpmTasks('grunt-contrib-copy');
	grunt.loadNpmTasks('grunt-autoprefixer');
	grunt.loadNpmTasks('grunt-contrib-clean');
	grunt.loadNpmTasks('grunt-contrib-cssmin');

	// Default tasks
	grunt.registerTask('default', ['less', 'autoprefixer', 'concat', 'clean', 'copy:bootstrap']);

	// Build for production
	grunt.registerTask('dist', ['default', 'uglify:dist', 'cssmin:dist', 'copy:bootstrap']);

	// Tasks for frontend development
	grunt.registerTask('frontend', ['less:frontend', 'autoprefixer:frontend', 'concat:frontend', 'clean']);
	grunt.registerTask('frontend-css', ['less:frontend', 'autoprefixer:frontend', 'concat:frontend_css', 'clean']);

	// Tasks for admin development
	grunt.registerTask('admin', ['less:admin', 'autoprefixer:admin', 'concat:admin']);
	grunt.registerTask('admin-css', ['less:admin']);

};