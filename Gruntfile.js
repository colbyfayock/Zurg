module.exports = function(grunt) {

    require('jit-grunt')(grunt);

    grunt.initConfig({

        pkg: grunt.file.readJSON('package.json'),

        sass: {

            options: {
                sourceMap: true
            },

            dist: {
                files: {
                    './css/main.css': './build/scss/main.scss',
                }
            },
        },

        watch: {
            css: {
                files: './build/scss/**/**/**/*.scss',
                tasks: [
                    'css'
                ]
            }
        }

    });

    grunt.registerTask('default', []);

    grunt.registerTask('css', [
        'sass:dist'
    ]);

};