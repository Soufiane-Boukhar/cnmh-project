var spawn = require("child_process").spawn,child;


function runScript(script){
    // child = spawn("powershell.exe",["c:\\temp\\helloworld.ps1"]);
    child = spawn("powershell.exe",[script]);
    child.stdout.on("data",function(data){
        console.log("Powershell Data: " + data);
    });
    child.stderr.on("data",function(data){
        console.log("Powershell Errors: " + data);
    });
    child.on("exit",function(){
        console.log("Powershell Script finished");
    });
    child.stdin.end(); //end input
}

runScript("php artisan infyom:scaffold Project --fromTable --table=projects");

