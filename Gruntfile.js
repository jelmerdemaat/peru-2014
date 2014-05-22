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
					style: 'compressed',
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
			files: [
				'sass/**/*.sass',
				'sass/**/*.scss',
				'*.htm',
				'_layouts/*.htm',
				'_posts/*.htm',
				'_posts/*.md'
				],
			tasks: ['sass','jekyll']
		}
	});

	grunt.registerTask('default', ['sass','jekyll']);

};