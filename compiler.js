const startTime = new Date();
const { minify } = require("terser");
const babel = require("@babel/core");
const sass = require("sass");
const mergerConfig = require("./merger.config");
fs = require('fs');
const files = [];

if (!fs.existsSync(mergerConfig.outputPath)){
	fs.mkdirSync(mergerConfig.outputPath);
}

if(mergerConfig.renderCss) {
	if(mergerConfig.scssSource?.length > 0) {
		fs.writeFileSync(
			`${mergerConfig.outputPath}/${mergerConfig.outputCssFile}`, sass.compile(mergerConfig.scssSource, {
				style: "compressed"
			}).css,
			'utf8'
		);
	}
}

if(mergerConfig.renderJs) {
	if(mergerConfig.files?.modules?.length > 0) {
		for(let i = 0;i < mergerConfig.files.modules.length;i++) {
			files.push(babel.transformSync(fs.readFileSync(`${mergerConfig.modulesPath}/${mergerConfig.files.modules[i]}`, 'utf8'), {
				"presets": [
					require("@babel/preset-env")
				]
			}).code);
		}
	}
	
	if(mergerConfig.files?.custom?.length > 0) {
		for(let i = 0;i < mergerConfig.files.custom.length;i++) {
			files.push(babel.transformSync(fs.readFileSync(`${mergerConfig.jsSource}/${mergerConfig.files.custom[i]}`, 'utf8'), {
				"presets": [
					require("@babel/preset-env")
				]
			}).code);
		}
	}
	
	if(files.length > 0) {
		minify(files, {
			format: {
				beautify: false
			}
		}).then(result => {
			fs.writeFileSync(`${mergerConfig.outputPath}/${mergerConfig.outputJsFile}`, result.code, 'utf8');
		});
	}	
}

console.log(`Rendered at ${(new Date() - startTime) / 1000} sec`);