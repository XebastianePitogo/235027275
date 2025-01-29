var gradient = new Gradient();
gradient.initGradient("canvas");

// optimized 3d models, laggers parin bruh (intel iris xe moment)
document.querySelectorAll("model-viewer").forEach(model => {
    model.setAttribute("auto-rotate", "");
    model.setAttribute("rotation-per-second", "60deg");
    model.setAttribute("shadow-intensity", "0.5");
    model.setAttribute("environment-image", "neutral");
    model.setAttribute("disable-tap", "");
    model.setAttribute("interpolation-decay", "200");
    model.setAttribute("autoplay", "");
    model.setAttribute("exposure", "1");
    model.setAttribute("tone-mapping", "aces");
    model.setAttribute("loading", "lazy");
});