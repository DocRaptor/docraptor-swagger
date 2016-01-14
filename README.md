# DocRaptor Swagger

This repo is for keeping the [swagger config](docraptor.yaml) and [scripts](script/) which we use to generate client libraries in many languages. You should only need to modify this repo if you're changing the options for generating swagger clients.

## Development and Release

If you make changes to `docraptor.yaml` or something in `script/`, you probably will want to synchronize that change to all the language repos. Do the following for each of the repos.

1. Run `script/update_from_upstream`
2. Inspect changes and modify examples, readme, tests, etc.
3. Commit and push to GitHub
4. Follow release instructions for that repo.

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
