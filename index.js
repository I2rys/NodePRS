//Dependencies
const Request = require("request")

//Variables
const Self_Args = process.argv.slice(2)

//Main
if(Self_Args.length == 0){
    console.log(`node index.js <phpfile_link> <command>
Example: node index.js phpfile_link ls`)
    process.exit()
}

Request(`${Self_Args[0]}?cmd=${Self_Args[1]}`, function(err, res, body){
    if(err){
        console.log("Something went wrong while requesting to the file.")
        process.exit()
    }

    console.log(body)
})
