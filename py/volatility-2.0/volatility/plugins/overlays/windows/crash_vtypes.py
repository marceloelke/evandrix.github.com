crash_vtypes = {
## These types are for crash dumps
  '_DMP_HEADER' : [ 0x1000, { \
    'Signature' : [ 0x0, ['array', 4, ['unsigned char']]], \
    'ValidDump' : [ 0x4, ['array', 4, ['unsigned char']]], \
    'MajorVersion' : [ 0x8, ['unsigned long']], \
    'MinorVersion' : [ 0xc, ['unsigned long']], \
    'DirectoryTableBase' : [ 0x10, ['unsigned long']], \
    'PfnDataBase' : [ 0x14, ['unsigned long']], \
    'PsLoadedModuleList' : [ 0x18, ['unsigned long']], \
    'PsActiveProcessHead' : [ 0x1c, ['unsigned long']], \
    'MachineImageType' : [ 0x20, ['unsigned long']], \
    'NumberProcessors' : [ 0x24, ['unsigned long']], \
    'BugCheckCode' : [ 0x28, ['unsigned long']], \
    'BugCheckCodeParameter' : [ 0x2c, ['array', 4, ['unsigned long']]], \
    'VersionUser' : [ 0x3c, ['array', 32, ['unsigned char']]], \
    'PaeEnabled' : [ 0x5c, ['unsigned char']], \
    'KdSecondaryVersion' : [ 0x5d, ['unsigned char']], \
    'VersionUser' : [ 0x5e, ['array', 2, ['unsigned char']]], \
    'KdDebuggerDataBlock' : [ 0x60, ['unsigned long']], \
    'PhysicalMemoryBlockBuffer' : [ 0x64, ['_PHYSICAL_MEMORY_DESCRIPTOR']], \
    'ContextRecord' : [ 0x320, ['array', 1200, ['unsigned char']]], \
    'Exception' : [ 0x7d0, ['_EXCEPTION_RECORD32']], \
    'Comment' : [ 0x820, ['array', 128, ['unsigned char']]], \
    'DumpType' : [ 0xf88, ['unsigned long']], \
    'MiniDumpFields' : [ 0xf8c, ['unsigned long']], \
    'SecondaryDataState' : [ 0xf90, ['unsigned long']], \
    'ProductType' : [ 0xf94, ['unsigned long']], \
    'SuiteMask' : [ 0xf98, ['unsigned long']], \
    'WriterStatus' : [ 0xf9c, ['unsigned long']], \
    'RequiredDumpSpace' : [ 0xfa0, ['unsigned __int64']], \
    'SystemUpTime' : [ 0xfb8, ['unsigned __int64']], \
    'SystemTime' : [ 0xfc0, ['unsigned __int64']], \
    'reserved3' : [ 0xfc8, ['array', 56, ['unsigned char']]], \
} ], \
}
