require.config({
    urlArgs: "v=1"
});

requirejs(["lib/tabulator.min", "lib/domReady"], (tab) => {
    new tab("#resultTable", {
        layout: "fitDataStretch",
        dataTree: true,
        ajaxURL: "api/getResults.php",
        ajaxConfig: "POST",
        columns:[
            {title:"Driver", field:"driver"},
            {title:"Lap time", field:"time"},
            {
                title: "Lap",
                columns:[
                    {title:"Sector 1", field:"s1"},
                    {title:"Sector 2", field:"s2"},
                    {title:"Sector 3", field:"s3"}
                ]
            },
            {title:"Car", field:"car"},
            {title:"Class", field:"class"}
        ],
    });
});