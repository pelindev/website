const path = require('path')
const HtmlWebpackPlugin = require('html-webpack-plugin')
const {CleanWebpackPlugin} = require('clean-webpack-plugin')

module.exports = {
    mode: 'development',
    entry: {
        main: '/src/js/main.js',
        
    },
    output: {
        filename: '[name].bundle.js',
        path: path.resolve(__dirname, 'dist') 
    },
    devServer: {
        contentBase: path.resolve(__dirname, 'dist'),
        port:9001,
        open: true
    },
    plugins: [
        new HtmlWebpackPlugin({
            template: '/index.php',
            filename: 'index.php'
        }),
        new CleanWebpackPlugin(),
    ],
    module: {
        rules: [
            {
                test: /\.css$/,
                use: ['style-loader', 'css-loader']
            },
            {
                test: /\.(png|jpg|svg|gif)$/,
                use: ['file-loader']
            },
            {
                test: /\.(ttf|woff|woff2|eot)$/,
                use: ['file-loader']
            }
        ]
    }
}