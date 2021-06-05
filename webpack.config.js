const path = require('path');
const { CleanWebpackPlugin } = require('clean-webpack-plugin');
const HtmlWebpackPlugin = require("html-webpack-plugin");
const ExtractTextPlugin = require('extract-text-webpack-plugin');
const CompressionPlugin = require('compression-webpack-plugin');
const webpack = require('webpack');

module.exports = {
    entry: {
        bundle: ['./src/index.js', './src/main.scss']
    },
    output: {
        path: path.join(__dirname, './public'),
        publicPath: '/',
        filename: '[name].[hash:6].js',
    },
    resolve: {
        alias: {
            Static: path.resolve(__dirname, 'static/')
        }
    },
    module: {
        rules: [
            {
                test: /\.js$/,
                exclude: /node_modules/,
                use: {
                    loader: 'babel-loader?presets[]=react',
                    options: {
                        presets: ['@babel/preset-env']
                    }
                }
            },
            {
                test: /\.(css|scss)$/,
                    use: ExtractTextPlugin.extract({
                    fallback: 'style-loader',
                    use: [
                        {
                            loader: 'css-loader',
                            options: {
                                minimize: true || {/* CSSNano Options */ }
                            }
                        },
                        {
                            loader: 'postcss-loader'
                        },
                        {
                            loader: 'sass-loader'
                        }
                    ]
                })
            },
            {
                test: /\.(jpg|jpeg|png|svg|woff2?|ttf|otf|eot)$/,
                exclude: /node_modules/,
                loader: 'file-loader?name=[name].[ext]'
            }
        ]
    },
    devtool: 'cheap-module-eval-source-map',
    devServer: {
        port: 8070,
        historyApiFallback: true,
        headers: {
            "Access-Control-Allow-Origin": "*",
            "Access-Control-Allow-Methods": "GET, POST, PUT, DELETE, PATCH, OPTIONS",
            "Access-Control-Allow-Headers": "X-Requested-With, content-type, Authorization"
        },
        index: 'index.html',
        contentBase: 'public',
        watchContentBase: true,
        stats: 'errors-only',
        clientLogLevel: 'error'
    },
    plugins: [
        new CleanWebpackPlugin(),
        new HtmlWebpackPlugin(
            {
                favicon: 'static/favicon.ico',
                template: "./src/index.html",
                filename: "index.html",
                chunks: ["bundle"]
            }
        ),
        new ExtractTextPlugin("[name].styles.css"),
        new webpack.DefinePlugin({
            "process.env": {
                NODE_ENV: JSON.stringify(process.env.NODE_ENV || 'production'),
                PUBLIC_KEY: JSON.stringify(process.env.PUBLIC_KEY),
                SECRET_KEY: JSON.stringify(process.env.SECRET_KEY),
                AMPL_API_KEY: JSON.stringify(process.env.AMPL_API_KEY),
                HOSTING_ADDRESS: JSON.stringify(process.env.HOSTING_ADDRESS)
            }
        }),
        new CompressionPlugin({
            test: /(\.js$)|(\.svg$)/i,
        })
    ]
};