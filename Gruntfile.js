module.exports = function(grunt) {

  grunt.initConfig({

    pkg: grunt.file.readJSON('package.json'),

    options: {
      'no-beep': true
    },

    // uglify: {
    //   options: {
    //     banner: '/*! <%= pkg.name %> | <%= grunt.template.today("dd-mm-yyyy - HH:mm:ss") %> */\n'
    //   },
    //   dist: {
    //     files: {
    //       'js/peru.min.js': ['js/peru.js']
    //     }
    //   }
    // },

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
        livereload: true
    	},
  		files: ['sass/**/*.sass','sass/**/*.scss'],
  		tasks: 'sass'
    }

  });


  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-sass');
  grunt.loadNpmTasks('grunt-contrib-watch');

  grunt.registerTask('default', ['sass']);

};