module.exports = {
	modulesPath: "node_modules",
	outputPath: "public/dist",
	scssSource: "assets/scss/style.scss",
	outputCssFile: "style.css",
	renderJs: true,
	renderCss: true,
	jsSource: "assets/javascript",
	outputJsFile: "main.js",
	files: {
		"custom": [
			"eventsource.min.js",
			"app.js",
		]
	}
}