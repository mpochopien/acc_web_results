require.config({
    urlArgs: "v=1"
});

requirejs(["lib/tabulator.min", "lib/domReady"], (tab) => {
    (() => {
        fetch('api/getTracks.php', {
            method: 'POST',
            credentials: 'include'
        }).then(tracks => tracks.json())
            .then(tracks => {
                for(let track in tracks){
                    let link = document.createElement('a');
                    link.appendChild(document.createTextNode(tracks[track]['name']));
                    document.querySelector('#trackListBar').appendChild(link);

                    link.addEventListener('click', () => {
                        resultsTab.setFilter("track", "=", tracks[track]['name']);
                    });
                }
            });
    })();

    document.querySelector("#resetFilter").addEventListener("click", ()=>{
        resultsTab.clearFilter();
    });

    let resultsTab = new tab("#resultTable", {
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
            {title:"Track", field:"track"},
            {title:"Class", field:"class"}
        ]
    });
});