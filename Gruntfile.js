module.exports = function(grunt) {

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

    watch: {
    	options: {

    	},
  		files: ['sass/**/*.sass','sass/**/*.scss'],
  		tasks: 'sass'
    }

  });


  grunt.loadNpmTasks('grunt-contrib-sass');
  grunt.loadNpmTasks('grunt-contrib-watch');

  grunt.registerTask('default', ['sass']);

};