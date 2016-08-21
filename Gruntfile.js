module.exports = function(grunt){
	grunt.initConfig({
		concat: {
			css: {
				src: 'css/build/!(colors)!(fotorama)*.css',
				dest: 'css/build/styles.css',
			},
		},
		watch: {
			less: {
				files: ['css/src/!(colors)*.less'],
				tasks: ['less'], // run single method with concat:method_name
				options: {
			      livereload: true,
			    },
			},
		},
		less: {
			src: {
			   expand:	true,
			   cwd:		"css/src",
			   src:		"*.less",
			   dest:	"css/build",
			   ext:		".css",
		   },
		},
		postcss: {
			options: {
				processors: [
					require('pixrem')(), // add fallbacks for rem units
					require('autoprefixer')({
						browsers: ['last 2 versions', '> 5%'],
					}), // add vendor prefixes
					require('cssnano')() //minify
				]
			},
			dist: {
				src: 'css/build/*.css'
			}
		}
	});

	// Enable Dependencies
	grunt.loadNpmTasks('grunt-contrib-concat');
	grunt.loadNpmTasks('grunt-contrib-watch');
	grunt.loadNpmTasks('grunt-postcss');
	grunt.loadNpmTasks('grunt-contrib-less');
	grunt.registerTask('default', ['watch']);
	grunt.registerTask('finalize', ['concat', 'postcss']);
};
