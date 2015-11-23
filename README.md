# Triplecheck.io

## Overview

Triplecheck.io original started as a simple websites born out of the frustration of having to deal with low quality Magento 
extensions. The original website did the following downloaded the 6400+ extensions directly available through connect,
unpacked each individual extension and ran several tools to generate a grade.

There where several limitations to this process and to the way it was ran, most significatively was the fact that triplecheck.io
couldn't review and grade, extensions not available on connect like commercial extensions or even custom local extensions developed
for a particular project.

The number one feature request after triplecheck.io went live was to be able to upload extensions and get a scoring back. Unfortunately,
there are limitations in terms of hosting, space and even legal reasons that would make that complicated. 

For that reason the algorithm used to score is no opensource, furthermore is available in the shape of a tool that can be use locally 
and securily without having to upload any files.

## Command line scope

Triplecheck.io as a command line tools has a specific set of responsabilities: 

- Take the user input (settings, paths, and any other level of configuration)
- Pass all that information to the individual plugins 
- Get a scoring back and present the grade or the report

Triplecheck as such will not do any specific analyzis rather it will implement several tools like:

- PHPCodeSniffer
- PHPMetrics
- PHPMessDectector
- PHPSpec
- And so on

Each of this plugin will consist of a wrapper for the individual tool as well it will implement a common interface to return the results
in a standard format that can be easily graded.

