let path_info = location.href
    .replace(document.baseURI, "")
    .replace(/[\/]?index[\/]?$/gim, "");
[...document.querySelectorAll('[href="' + path_info + '"]')].forEach(el => {
    el.classList.add("active");
});
