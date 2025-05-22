module.exports = {
  proxy: "http://host.docker.internal:8000",
  files: [
    "wordpress/wp-content/plugins/**/*.{php,js,css}",
    "wordpress/wp-content/themes/**/*.{php,js,css}"
  ],
  port: 3000,
  open: false,
  notify: false,
  ui: false,
  ghostMode: false
};
