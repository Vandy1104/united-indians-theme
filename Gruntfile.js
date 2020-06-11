module.exports = function(grunt) {

  grunt.initConfig({
    sass: {                              // Task
       dist: {                            // Target
         options: {                       // Target options
           style: 'expanded'
         },
         files: {                         // Dictionary of files
           'css/main.css': 'sass/main.scss'      // 'destination': 'source'

         }
       }
     },
    jshint: {
      files: ['Gruntfile.js', 'js/script.js'],
      options: {
        globals: {
          jQuery: true
        }
      }
    },
    // grunt-contrib-csslint v2.0.0
    csslint: {
      strict: {
        options: {
          import: 2
        },
        src: ['css/*.css','!*.min.css']//do not include min files
      },
      lax: {
        options: {
          import: false
        },
        src: ['css/*.css','!*.min.css']
      }
    },
    imagemin: {
        static: {
            options: {
                optimizationLevel: 3,
                svgoPlugins: [{removeViewBox: false}],
                //use: [mozjpeg()] // Example plugin usage
            },
            files: {
                'images/img.png': 'images/img.png',
                'images/img.jpg': 'images/img.jpg',
                'images/img.gif': 'images/img.gif'
            }
        },
        dynamic: {
            files: [{
                expand: true,
                cwd: 'images/',
                src: ['**/*.{png,jpg,gif}'],
                dest: 'images/'
            }]
        }
    },
    // grunt uglify
    uglify: {

      build: {
        src: 'js/script.js',
        dest: 'js/script.min.js'
      }
    },
    // grunt-contrib-cssmin
    cssmin: {
      target: {
        files: [{
          expand: true,
          cwd: 'css',
          src: ['main.css', '!main.min.css'],
          dest: 'css/main.min.css',
          ext: '.min.css'
        }]
      }
    },
    watch: {
      files: ['Gruntfile.js', 'js/script.js','sass/main.scss','css/main.css'],
      tasks: ['sass','jshint']
    }

  });

  grunt.loadNpmTasks('grunt-contrib-jshint');
  grunt.loadNpmTasks('grunt-contrib-csslint');
  grunt.loadNpmTasks('grunt-contrib-imagemin');
  grunt.registerTask('ugly', ['cssmin'], ['uglify']);
  grunt.loadNpmTasks('grunt-contrib-cssmin');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-contrib-sass');


  grunt.registerTask('default', ['watch']);

};
