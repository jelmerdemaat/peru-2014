module.exports = function(grunt) {

  grunt.initConfig({

    pkg: grunt.file.readJSON('package.json'),

    sass: {
        dist: {
          options: {
            style: 'compact',
            compass: true
          },
          files: {
            'css/main.css': 'sass/main.sass',
          }
        }
      },

    watch: {
    	options: {

    	},
  		files: 'sass/**/*.sass',
  		tasks: 'sass'
    }

  });


  grunt.loadNpmTasks('grunt-contrib-sass');
  grunt.loadNpmTasks('grunt-contrib-watch');

  grunt.registerTask('default', ['sass']);

};