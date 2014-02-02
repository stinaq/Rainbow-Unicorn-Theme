module.exports = function (grunt) {

  // Project configuration.
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),
    copy: {
      main: {
        files: [
          {
            expand: true,
            src: 'rainbowunicorn/**',
            dest: '/Users/stina/Sites/wordpress/wp-content/themes/'
          }
        ]
      }
    },
    watch: {
      main: {
        files: ['rainbowunicorn/**'],
        tasks: ['copy']
      }
    }
  });

  // Load the plugin that provides the "uglify" task.
  grunt.loadNpmTasks('grunt-contrib-copy');
  grunt.loadNpmTasks('grunt-contrib-watch');

  // Default task(s).
  grunt.registerTask('default', ['copy', 'watch']);

};