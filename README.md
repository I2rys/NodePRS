
<h1 align="center">NodePRS</h1>
<h4 align="center">A really simple web reverse shell</h4>
<p align="center">
	<a href="https://github.com/I2rys/NodePRS/blob/main/LICENSE"><img src="https://img.shields.io/github/license/I2rys/NodePRS?style=flat-square"></img></a>
	<a href="https://github.com/I2rys/NodePRS/issues"><img src="https://img.shields.io/github/issues/I2rys/NodePRS.svg"></img></a>
	<a href="https://nodejs.org/"><img src="https://img.shields.io/badge/-Nodejs-green?style=flat-square&logo=Node.js"></img></a>
</p>


## Installation
Github:

    git clone https://github.com/I2rys/NodePRS

NPM Packages:

    npm i request
    
## Setup
Just upload the index.php in a website that is vulnerable to file inclusion.

## Usage

    node index.js <phpfile_link> <command>

 - phpfile_link - The link of the PHP file that is uploaded on a website.
 - command - The command to execute on the PHP file.

## License
MIT © I2rys
