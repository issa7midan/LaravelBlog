// The locale our app first shows
const defaultLocale = "en";

// The active locale
let locale;

var currentLocale = window.localStorage.getItem('lang');

// Gets filled with active locale translations
let translations = {};

// When the page content is ready...
document.addEventListener("DOMContentLoaded", () => {
  // Translate the page to the default locale
  checkLanguage();
  //setLocale(defaultLocale);
  
  //bindLocaleSwitcher(defaultLocale);
});

// Load translations for the given locale and translate
// the page to this locale
async function setLocale(newLocale) {
  //console.log(newLocale);
  if (newLocale === locale) return;
  //alert("lol");
  const newTranslations =
    await fetchTranslationsFor(newLocale);
  //alert(newTranslations);
  locale = newLocale;
  translations = newTranslations;
  await translatePage();
}

// Retrieve translations JSON object for the given
// locale over the network
async function fetchTranslationsFor(newLocale) {
  //const response = await fetch(`/lang/${newLocale}.json`);
  console.log(newLocale);
  //var json = load(newLocale);
  //console.log(json);
  const response = await fetch(`http://127.0.0.1:8000/${newLocale}.json`, {
    headers : { 
      'Content-Type': 'application/json',
      'Accept': 'application/json'
     }

  });
  return await response.json();
}

// Replace the inner text of each element that has a
// data-i18n-key attribute with the translation corresponding
// to its data-i18n-key
async function translatePage() {
  document
    .querySelectorAll("[StrRes]")
    .forEach(translateElement);
}

// Replace the inner text of the given HTML element
// with the translation in the active locale,
// corresponding to the element's data-i18n-key
function translateElement(element) {
  const key = element.getAttribute("StrRes");
  const translation = translations[key];
  element.innerHTML = translation;
}

function bindLocaleSwitcher(initialValue) {
  const switcher =
    document.getElementById("data-i18n-switcher1");
  switcher.value = initialValue;
  switcher.onchange = (e) => {
    console.log(switcher.value);
    // Set the locale to the selected option[value]
    //setLocale(e.target.value);
  };
}

async function checkLanguage() {
  //const queryString = window.location.search;
  //console.log(queryString);
  //const urlParams = new URLSearchParams(queryString);
  //const lang = urlParams.get('lang');
  var lang = defaultLocale;
  console.log(currentLocale);
  if(currentLocale != null) {
    await setLocale(currentLocale);
    return;
  }
  await setLocale(lang);
}

function load(newLocale) {
  var json = '';

  json = sendRequest('GET',`${newLocale}.json`);
  return json;
}

