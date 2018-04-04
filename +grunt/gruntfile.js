module.exports = function(grunt) {
	
	// Clean Time Output
	require('time-grunt')(grunt);

	// Global: Defines which page we are building via 'site=' parameter
	var site = grunt.option('site');
	if (site == undefined){
		grunt.fail.fatal("You need to pass a --site= parameter with the task.");
	} else {
		var html_source_folder = "../html-"+site;
		if (grunt.file.exists(html_source_folder+'/sass/main.scss')){
			console.log("Grunt will compile the files within the site folder: /"+html_source_folder+"/");
		} else {
			grunt.fail.fatal("The file main.scss doesn't exists for the site provided.");
		}
	}

	// Global Project Config
	grunt.initConfig({
		pkg: grunt.file.readJSON('package.json')
	});

	// Compiles SASS
	grunt.loadNpmTasks('grunt-contrib-sass');
	grunt.config('sass',{
		options: {style:'compact', sourcemap:'auto'},
		build: {
			files: [{src: html_source_folder+'/sass/main.scss', dest: html_source_folder+'/style.css'}]
		}
	});	

	// CSS Modifications to style.css
	grunt.loadNpmTasks('grunt-postcss');
	grunt.config('postcss',{
	  options: {
	    map: true,
	    processors: [
	      require('autoprefixer')({browsers:['> 1%','last 2 versions'], cascade:false, remove:true})
	    ]
	  },
	  build: {
	  	 files: [{src: html_source_folder+'/style.css', dest: html_source_folder+'/style.css'}]
	  }
	});

	// Minify CSS Files
	grunt.loadNpmTasks('grunt-contrib-cssmin');
	grunt.config('cssmin',{
		options: {sourceMap:true},
		build: {
			files: [{src: html_source_folder+'/style.css', dest: html_source_folder+'/style.css'}]
		},
		build_all: {
			files: [{expand: true, cwd: html_source_folder+'/css', src: ['**/*.css', '!**/*.min.css'], dest: html_source_folder+'/css/', ext: '.min.css'}]
		}
	});

	// Minify JS Files
	grunt.loadNpmTasks('grunt-contrib-uglify');
	grunt.config('uglify',{
		options: {sourceMap:true},
		build: {	
			files: [{src: html_source_folder+'/js/main.js', dest: html_source_folder+'/js/main.min.js'}]
		}
	});

	// Image Compression
	grunt.loadNpmTasks('grunt-contrib-imagemin');
	grunt.config('imagemin',{
		options: {optimizationLevel:7},
		build: {
			files: [{expand: true, cwd: html_source_folder+'/images', src: ['**/*.{png,jpg,gif}'], dest: html_source_folder+'/images'}]
		}
	});

	// Watch for Changes in the HTML Source folder
	grunt.loadNpmTasks('grunt-contrib-watch');
	grunt.config('watch',{
		build: {
			files: [html_source_folder+'/sass/**/*.scss'],
			tasks: ['sass:build','postcss:build']
		}
	});

	// Default task(s):
	grunt.registerTask('build', ['sass:build','postcss:build','cssmin:build','uglify:build']);
	grunt.registerTask('build_all', ['sass:build','postcss:build','cssmin:build','uglify:build','imagemin:build']);
};