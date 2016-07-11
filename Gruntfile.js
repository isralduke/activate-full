// wrapper function
module.exports = function(grunt){
	// load all our Grunt plugins
	require('load-grunt-tasks')(grunt);
	var jpegRecompress = require('imagemin-jpeg-recompress');
	
	grunt.loadNpmTasks('grunt-contrib-less');
	grunt.loadNpmTasks('grunt-contrib-uglify');
	grunt.loadNpmTasks('grunt-deployments');
	grunt.loadNpmTasks('grunt-contrib-cssmin');
	grunt.loadNpmTasks('grunt-contrib-imagemin');
	grunt.loadNpmTasks('grunt-criticalcss');

	grunt.initConfig({
	pkg:grunt.file.readJSON('package.json'),
		// task configuration goes here

		jshint:{
			options:{
				'node':true,
				'esnext':true,
				'curly':false,
				'smarttabs':false,
				'indent':2,
				'quotmark':'single'
			},
			all:['Gruntfile.js','app/js/script.js']
		},

		less:{
			production: {
				options:{
					paths:['app/css'],
					report:'gzip'
				},
				files:{
					'app/css/styles.css':'app/css/styles.less'
				}
			}
		},

		sass: {
			dist: {
				files: {
					'remote/css/styles.css' : 'remote/scss/styles.scss'
				}
			}
		},

		cssmin: {
			add_banner: {
				options: {
				banner: '/* Author: Quinton Jason @quintonjasonjr */'
			},
				files: {
				'app/css/styles.css': ['app/css/styles.css']
				}
			}
		},

		imagemin:{
			dynamic:{
				files:[{
					expand:true,
					cwd: 'app/',
					src: ['**/*.{png,jpg,gif}'],
					dest: 'app/'
				}]
			}
		},

		uglify: {
			my_target: {
				options: {
					mangle:false,
					report:'gzip'
				},
				files: {
					'remote/js/script.min.js': ['app/js/script.js']
				}
			}
		},

		watch: {
			// scripts:{
			// 	files:'remote/js/activations.js',
			// 	tasks:['uglify'],
			// 	options:{
			// 		livereload:true
			// 	}
			// },
			css:{
				files:'remote/scss/styles.scss',
				tasks:['sass'],
				options:{
					livereload:true
				}
			}
		}

	});

    // define the default task that executes when we run 'grunt' from inside the project
	grunt.registerTask('default', ['watch']);

};