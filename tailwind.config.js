/**
 * Minimal Tailwind config to help editor extensions (Tailwind IntelliSense)
 * recognize classes used in this project (Blade views, JS, CSS).
 *
 * This file does NOT change the CDN usage in your HTML. It only helps
 * local tools (VS Code extension, linters) to validate Tailwind classes.
 */
module.exports = {
    content: [
        "./resources/views/**/*.blade.php",
        "./resources/js/**/*.js",
        "./resources/css/**/*.css",
    ],
    theme: {
        extend: {},
    },
    plugins: [],
};
