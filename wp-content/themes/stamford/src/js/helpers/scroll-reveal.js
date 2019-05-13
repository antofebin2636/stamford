window.sr = ScrollReveal();

sr.reveal(".reveal", {
    mobile: true,
    reset: true,
    opacity: 0,
    scale: 1
});

sr.reveal(".title-section", {
    mobile: true,
    reset: true,
    opacity: 0,
    scale: 1
});

sr.reveal(".reveal--up", {
    mobile: true,
    duration: 2000,
    distance: "20px",
    origin: "bottom",
    opacity: 0,
    scale: 1,
    reset: true
});

sr.reveal(".reveal--left", {
    mobile: true,
    duration: 2000,
    distance: "20px",
    origin: "left",
    opacity: 0,
    scale: 1,
    reset: true
});

sr.reveal(".reveal--right", {
    mobile: true,
    duration: 2000,
    distance: "20px",
    origin: "right",
    opacity: 0,
    scale: 1,
    reset: true
});

sr.reveal(".delay-up", {
    delay:200,
    mobile: true,
    duration: 2000,
    distance: "60px",
    origin: "bottom",
    opacity: 0,
    scale: 1,
    reset: true
});