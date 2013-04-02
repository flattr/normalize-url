PHP library for normalizing URLs as specified in
[RFC 3986](http://en.wikipedia.org/wiki/URI_scheme#Generic_syntax).
The library doesn't require any dependencies.
The library is very simple to use: simply include it
and call `normalizeURL()` with the input URL as a str param.

Supports:

- Removal of WWW subdomains, e.g. if www.foo.bar points to the same location as foo.bar.
- Removal of default ports (HTTP and HTTPS supported by default;
  edit `$defaultSchemes` to support additional protocols and ports if you wish)
- Removal of duplicate slashes
- Decoding unreserved characters
- Removal of default directory index files
- Removal of dot segments in URL path
- Sorting GET params alphabetically
