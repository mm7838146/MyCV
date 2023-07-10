function changeColor() {
    document.body.classList.toggle("dark");
}
function changeColor1() {
    document.body.classList.toggle("dark1");
}

/**
 * Changes theme for the given node
 * @param {Node} node 
 */
function switchTheme(node) {
    if (node.nodeType == Node.ELEMENT_NODE) node.classList.toggle('dark');
    for (var i = 0; i < node.childNodes.length; i++) {
        console.log(node.childNodes[i]);
        switchTheme(node.childNodes[i]);
    }
}
