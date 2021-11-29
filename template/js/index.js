import Translator from "./translator.js";

var translator = new Translator({
  defaultLanguage: 'en',
  detectLanguage: true,
  selector: '[data-i18n]',
  debug: false,
  registerGlobally: '__',
  persist: true,
  persistKey: 'preferred_language',
  filesLocation: '/i18n',
});

translator.fetch(["en", "fr", "es", "ru", "zh", "ar", "ja", "pt", "et", "tr", "hi", "vi", "id"]).then(() => {
  translator.translatePageTo(translator.defaultLanguage);
});

document.getElementById("lang-switcher").addEventListener("click", function(evt) {
  if (evt.target.tagName === "A") {
    translator.translatePageTo(evt.target.textContent);
  }
});