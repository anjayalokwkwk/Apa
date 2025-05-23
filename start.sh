#!/bin/bash
php -S localhost:3333 > /dev/null 2>&1 &
cloudflared tunnel --url http://localhost:3333
