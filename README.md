# DocRaptor Swagger

This repo is for keeping the [swagger config](docraptor.yaml) and [scripts](script/) which we use to generate client libraries in many languages. You should only need to modify this repo if you're changing the options for generating swagger clients.

For historical reasons we have the Node.js client in this repo, but all other languages exist in their [own repos](https://github.com/docraptor/). Eventually the Node.js client will move elsewhere.

## Scratchlist of Issues
While we're still sorting out the basics here's a list of crazy things
- java does not have file deserialization support
- add version numbers to our clients
- node is using a non-standard generator because we couldn't easily get the standard dynamic one working

## Things we might do to/for Swagger
* Add naming convention descriptions to all config helps
* Document how to setup/run all the different languages for newbies like us
* make project like this for easy bootstrapping of client libraries
* document best practices
* HMAC verification
* idempotentency requests headers
* gzip
* ssl certificate inclusion
* add debug to all client libraries we use
* improve swagger ui, it gets odd cache issues
* ruby server generator
* better usage of nested params (fix issue causing definitions to be used)
