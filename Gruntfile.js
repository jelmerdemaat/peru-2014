module.exports = function(grunt) {

	require('load-grunt-tasks')(grunt);

	grunt.initConfig({
		pkg: grunt.file.readJSON('package.json'),
		options: {
			'no-beep': true
		},
		sass: {
			dist: {
				options: {
					style: 'compact',
					compass: true
				},
				files: {
					'css/peru.css': 'sass/peru.sass',
				}
			}
		},
		jekyll: {                             // Task
			options: {                          // Universal options
			},
			dist: {                             // Target
				options: {                        // Target options
				}
			}
		},
		watch: {
			options: {
				livereload: true
			},
			files: ['sass/**/*.sass','sass/**/*.scss','**/*.htm'],
			tasks: 'sass'
		}
	});

	grunt.registerTask('default', ['sass','jekyll']);

};