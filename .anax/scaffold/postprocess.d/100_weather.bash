#!/usr/bin/env bash
#
#
# Copy the configuration files
rsync -av vendor/asti/weather/config ./

# Copy the view
rsync -av vendor/asti/weather/view ./

# copy the src directory
rsync -av vendor/asti/weather/src ./

# copy the test directory
rsync -av vendor/asti/weather/test ./
