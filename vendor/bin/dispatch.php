#!/usr/bin/env sh
SRC_DIR="`pwd`"
cd "`dirname "$0"`"
cd "../peej/tonic/web"
BIN_TARGET="`pwd`/dispatch.php"
cd "$SRC_DIR"
"$BIN_TARGET" "$@"
