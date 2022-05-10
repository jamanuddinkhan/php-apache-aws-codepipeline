#!/bin/bash
if ! [ -x "$(command -v apache2)" ]; then apt install apache2 >&2;   exit 1; fi # install apache if not already installed
