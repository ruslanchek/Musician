/**
 * Adobe Edge: symbol definitions
 */
(function($, Edge, compId){
//images folder
var im='images/';

var fonts = {};
var opts = {};
var resources = [
];
var symbols = {
"stage": {
    version: "3.0.0",
    minimumCompatibleVersion: "3.0.0",
    build: "3.0.0.322",
    baseState: "Base State",
    scaleToFit: "none",
    centerStage: "none",
    initialState: "Base State",
    gpuAccelerate: false,
    resizeInstances: false,
    content: {
            dom: [
            {
                id: 'maslyakov_5',
                type: 'image',
                rect: ['0px', '0px','2000px','1280px','auto', 'auto'],
                fill: ["rgba(0,0,0,0)",im+"maslyakov_5.jpg",'0px','0px']
            },
            {
                id: 'Ellipse',
                type: 'ellipse',
                rect: ['1255px', '482px','90px','90px','auto', 'auto'],
                borderRadius: ["50%", "50%", "50%", "50%"],
                fill: ["rgba(192,192,192,1)"],
                stroke: [0,"rgba(0,0,0,1)","none"]
            }],
            symbolInstances: [

            ]
        },
    states: {
        "Base State": {
            "${_Stage}": [
                ["color", "background-color", 'rgba(255,255,255,1)'],
                ["style", "overflow", 'hidden'],
                ["style", "height", '1280px'],
                ["style", "width", '2000px']
                    ["style", "left", '1055px'],
            ],
            "${_Ellipse}": [
                ["style", "top", '1057px'],
                ["motion", "location", '1094px 1107px']
            ],
            "${_maslyakov_5}": [
                ["style", "left", '0px'],
                ["style", "top", '0px']
            ]
        }
    },
    timelines: {
        "Default Timeline": {
            fromState: "Base State",
            toState: "",
            duration: 8050,
            autoPlay: true,
            timeline: [
                { id: "eid1", tween: [ "motion", "${_Ellipse}", [[1094, 1107, 0, 0],[1101.67, 1038.81, -0.92, -24.2, -7.77, -205.45],[1098.9, 977.42, -11.75, -29.92, -9.9, -25.21],[1069.99, 950.29, -206.97, -32.01, -44.52, -6.89],[875.28, 947.81, -107.58, 22.61, -51.13, 10.74],[840.78, 990.15, -13.96, 99.96, -5.03, 36],[822.23, 1094.95, -65.45, 98.7, -57.53, 86.75],[725.56, 1051.06, 0, -59.64, 0.01, -179.91],[724.5, 977.25, 8.65, -115.56, 5.69, -75.96],[755.48, 874.94, 43.02, -66.35, 53.74, -82.88],[823.35, 831.02, 244.17, -46.99, 90.74, -17.46],[1241.27, 815.69, 193.64, -111.1, 175.1, -100.46],[1408.07, 686.94, 1.24, -48.27, 2.58, -100.21],[1406.2, 319.12, -62.24, -524.75, -6.41, -54.06],[1297.19, 238.45, -18.86, 238.61, -9.26, 117.14],[1295, 546, 0, 0]]], position: 0, duration: 8050, easing: "swing" }            ]
        }
    }
}
};


Edge.registerCompositionDefn(compId, symbols, fonts, resources, opts);

/**
 * Adobe Edge DOM Ready Event Handler
 */
$(window).ready(function() {
     Edge.launchComposition(compId);
});
})(jQuery, AdobeEdge, "EDGE-43023695");
