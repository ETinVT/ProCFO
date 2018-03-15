# cp-template
SCSS library for compiling the global compiled CPA Site Solutions css library

## Setup Environment

* Install [node.js](https://nodejs.org/en/) along with cli support locally on your computer
* Install [Github Desktop App](https://desktop.github.com/) or [git](https://git-scm.com/downloads) cli

## Clone this repository

### Open the cli and navigate to the project

* From the Github desktop App 
  * ` ctrl + ` `
* Keyboard shortcuts 
  * ` Windows Start Key + r `
  * In the run terminal launch ` cmd `
  * In the cli navigate to the _cp-template_ project ` cd /directory/path `

### Install dependancies

type ` npm i ` in the cli

## Compiling

Three commands have been added for compiling the style sheet in the cli

### Quick compile css
* Compile css
  * ` npm run build-css `
* Watch for changes and compile css
  * ` npm run watch-css `
  
### Compile/Watch all files for changes

`npm run build` 

## Create a new project with this template

1. Create a `{new-repo}`
2. Clone `{cp-template}`
3. Open `{cp-template}` in cli
4. Run `git push --mirror https://github.com/kikoku/{new-repo}.git` in cli
5. Clone `{new-repo}` to your local machine
6. Open `{new-repo}` in cli
7. `npm i` to install all dependacies
8. Work
