module.exports = {
	modulesPath: "node_modules",
	outputPath: "public/dist",
	scssSource: "public/css/style.scss",
	outputCssFile: "style.css",
	renderJs: true,
	renderCss: true,
	jsSource: "public/js",
	outputJsFile: "main.js",
	files: {
		"custom": [
			"eventsource.min.js",
			"app.js",
		]
	}
}