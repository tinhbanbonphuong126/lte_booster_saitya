/*! *//*!
 * ~~~~~~~~~~~~~~~~~~
 * Yofinity - Ÿœﬁî~î†Ú
 * https://github.com/crewstyle/yohoho.yofinity
 * ~~~~~~~~~~~~~~~~~~
 * Copyright 20xx Achraf Chouk (http://github.com/crewstyle)
 */

module.exports = function (grunt){
  //------ [CONFIGURATION] ------//
  var Helpers = require('./tasks/helpers'),
    filterAvailable = Helpers.filterAvailableTasks,
    _ = grunt.util._,
    path = require('path');

  //read package
  Helpers.pkg = require('./package.json');

  //check time
  if (Helpers.isPackageAvailable('time-grunt')) {
    require('time-grunt')(grunt);
  }

  //loads task options from `tasks/options/` and tasks defined in `package.json`
  var config = _.extend({},
    require('load-grunt-config')(grunt, {
      configPath: path.join(__dirname, 'tasks/options')
    })
  );

  //loads tasks in `tasks`
  grunt.loadTasks('tasks');

  //set node environment
  config.env = process.env;


  //------ [TASKS REGISTRATION] ------//
  //JShint validation
  grunt.registerTask('test', 'Test JS files.', ['debug']);
  grunt.registerTask('debug', filterAvailable([
    'jshint:src'
  ]));

  //Default task
  grunt.registerTask('default', 'Build minified & production-ready files.', [
    'cleanall',
    'minify'
  ]);

  //Clean distributed files
  grunt.registerTask('cleanall', filterAvailable([
    'clean:dist'
  ]));

  //Minify and uglify files
  grunt.registerTask('minify', filterAvailable([
    'uglify:src'
  ]));


  //------ [INITIALIZATION] ------//
  grunt.initConfig(config);
};
