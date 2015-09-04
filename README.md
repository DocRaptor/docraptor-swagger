# DocRaptor Swagger

Repeatable process for generating DocRaptor API clients using the latest development version of Swagger.

*WARNING*: The generated libraries currently make requests against https://smoke.docraptor.com, not production!

## Setup

```sh
script/setup
```

## Build & Try with Language X

This will run all test scripts for the language:

```sh
script/ruby
script/python
script/java
script/csharp
script/php
script/node
```

Or you can run an individual test script like so:

```sh
script/ruby async
```

So far we have these tests done in each language:
- sync
- async
- invalid_sync
- invalid_async

## Layout

`script/` are tools to run things, should be fairly obvious.

`config.*.json` are the language specific config files for doing code generation. You can change thing like class and package names here.

`test/` are the source files for using a native client.

`clients/` are the auto-generated client files. These are deleted and regenerated whenever you run a test.

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
