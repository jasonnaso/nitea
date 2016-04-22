module.exports = function(grunt) {

  // Project configuration.
  grunt.initConfig({

    pkg: grunt.file.readJSON('package.json'),

    uglify: {    
      build: {
        src: ['js/bootstrap.js','js/lib/*.js'],
        dest: 'js/global.min.js'
      }
    },

    less: {       
        production: {
          options: {
            cleancss: true,
          },
          files: {
            "css/bootstrap.css": "less/bootstrap.less"
          }
        }
      },

      watch: {
        css: {
          files: '**/*.less',
          tasks: ['less'],
          options: {
            livereload: true,
          },
        },
      },

      browserSync: {
          dev: {
              bsFiles: {
                  src : 'css/*.css'
              },
              options: {
                  proxy: "local.abcstallningar.se:8888"
              }
          }
      },

  });

  // Load the plugin that provides the "uglify" task.
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-less'); 
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-browser-sync');


  // Default task(s).
  grunt.registerTask('default', ['watch']);

};