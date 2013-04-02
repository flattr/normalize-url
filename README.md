PHP library for normalizing URLs as specified in RFC 3986. The library doesn't
require any dependencies. The library is very simple to use, simply include it
and call normalizeURL() with the input URL as a str param.

Supports

- Removal of WWW subdomains, if www.foo.bar point to the same location of foo.bar.
- Removal of default ports (HTTP and HTTPS supported by default, increase $defaultSchemes
  with additional protocols and ports if you wish)
- Removal of duplicate slashes
- Decoding unreserved characters
- Removal of default directory index files
- Removal of dot segments in URL path
- Sorting GET params alphabetically
