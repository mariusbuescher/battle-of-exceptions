module.exports = function(env) {
    return {
        entry: './src/AppBundle/Resources/frontend/app/bootstrap.js',
        output: {
            filename: './src/AppBundle/Resources/public/js/app.js',
        },
        resolve: {
            alias: {
                'vue$': 'vue/dist/vue.esm.js'
            }
        },
        module: {
            rules: [
                {
                    test: /\.js$/,
                    exclude: /(node_modules|bower_components)/,
                    use: {
                        loader: 'babel-loader',
                        options: {
                            presets: ['env']
                        }
                    }
                }
            ]
        }
    }
};
