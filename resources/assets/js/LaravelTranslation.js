var LaravelTranslation = {};
LaravelTranslation.install = function (Vue, options) {
    Vue.prototype.jtrans = jtrans;
    Vue.filter("trans", jtrans);
};
export default LaravelTranslation;
