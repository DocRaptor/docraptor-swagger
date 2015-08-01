#!/usr/bin/env ruby

require 'yaml'
require 'json'

# yaml file with api definition
in_file_name = ARGV[0]

# json file output
out_file_name = ARGV[1]

# read in yaml
yaml = File.read(in_file_name)

# convert yaml to hash
hash = YAML::load(yaml)

# convert hash to string
json = hash.to_json

# write string to out_file_name
File.open(out_file_name, 'w') {|f| f.write(json) }