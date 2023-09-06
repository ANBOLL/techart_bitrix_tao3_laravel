module.exports = {
	docRoot: '../www',
	buildPath: '../www/builds',
	storybookBuildPath: '/storybook', // От docRoot
	hotPort: 8889,
	mainStyleType: 'postcss-scss',
	mainTemplateType: 'blade',
	entry: {
		index: ['./src/entry/index.js'],
		feedback: ['./src/entry/feedback.js'],
	},
	stats: {},
	https: true,
	images: {
		bypassOnDebug: true,
		gifsicle: {
			interlaced: false,
		},
		optipng: {
			optimizationLevel: 7
		},
		pngquant: {
			enabled: false,
		},
		mozjpeg: {
			quality: 93
		}
	},
	base64MaxFileSize: 10000,
	// Два следующих объекта использовать только в крайней необходимости
	aliases: { // Альтернативные имена для путей, например "my_plugin" : "src/component/alert"
	},
	providePlugin: { // Автоматическая подгрузка модулей через providePlugin
	},
	exposeGlobal: [
		{'module': 'jquery', 'name': '$'},
		{'module': 'jquery', 'name': 'jQuery'},
	],
	resolve: {},
	module: {},
	output: {},
	cssProcessing: [],
};
