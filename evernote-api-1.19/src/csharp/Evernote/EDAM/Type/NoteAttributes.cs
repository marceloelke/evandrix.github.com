/**
 * Autogenerated by Thrift
 *
 * DO NOT EDIT UNLESS YOU ARE SURE THAT YOU KNOW WHAT YOU ARE DOING
 */
using System;
using System.Collections;
using System.Collections.Generic;
using System.Text;
using System.IO;
using Thrift;
using Thrift.Collections;
using Thrift.Protocol;
using Thrift.Transport;
namespace Evernote.EDAM.Type
{

  [Serializable]
  public partial class NoteAttributes : TBase
  {
    private long subjectDate;
    private double latitude;
    private double longitude;
    private double altitude;
    private string author;
    private string source;
    private string sourceURL;
    private string sourceApplication;
    private long shareDate;

    public long SubjectDate
    {
      get
      {
        return subjectDate;
      }
      set
      {
        __isset.subjectDate = true;
        this.subjectDate = value;
      }
    }

    public double Latitude
    {
      get
      {
        return latitude;
      }
      set
      {
        __isset.latitude = true;
        this.latitude = value;
      }
    }

    public double Longitude
    {
      get
      {
        return longitude;
      }
      set
      {
        __isset.longitude = true;
        this.longitude = value;
      }
    }

    public double Altitude
    {
      get
      {
        return altitude;
      }
      set
      {
        __isset.altitude = true;
        this.altitude = value;
      }
    }

    public string Author
    {
      get
      {
        return author;
      }
      set
      {
        __isset.author = true;
        this.author = value;
      }
    }

    public string Source
    {
      get
      {
        return source;
      }
      set
      {
        __isset.source = true;
        this.source = value;
      }
    }

    public string SourceURL
    {
      get
      {
        return sourceURL;
      }
      set
      {
        __isset.sourceURL = true;
        this.sourceURL = value;
      }
    }

    public string SourceApplication
    {
      get
      {
        return sourceApplication;
      }
      set
      {
        __isset.sourceApplication = true;
        this.sourceApplication = value;
      }
    }

    public long ShareDate
    {
      get
      {
        return shareDate;
      }
      set
      {
        __isset.shareDate = true;
        this.shareDate = value;
      }
    }


    public Isset __isset;
    [Serializable]
    public struct Isset {
      public bool subjectDate;
      public bool latitude;
      public bool longitude;
      public bool altitude;
      public bool author;
      public bool source;
      public bool sourceURL;
      public bool sourceApplication;
      public bool shareDate;
    }

    public NoteAttributes() {
    }

    public void Read (TProtocol iprot)
    {
      TField field;
      iprot.ReadStructBegin();
      while (true)
      {
        field = iprot.ReadFieldBegin();
        if (field.Type == TType.Stop) { 
          break;
        }
        switch (field.ID)
        {
          case 1:
            if (field.Type == TType.I64) {
              this.subjectDate = iprot.ReadI64();
              this.__isset.subjectDate = true;
            } else { 
              TProtocolUtil.Skip(iprot, field.Type);
            }
            break;
          case 10:
            if (field.Type == TType.Double) {
              this.latitude = iprot.ReadDouble();
              this.__isset.latitude = true;
            } else { 
              TProtocolUtil.Skip(iprot, field.Type);
            }
            break;
          case 11:
            if (field.Type == TType.Double) {
              this.longitude = iprot.ReadDouble();
              this.__isset.longitude = true;
            } else { 
              TProtocolUtil.Skip(iprot, field.Type);
            }
            break;
          case 12:
            if (field.Type == TType.Double) {
              this.altitude = iprot.ReadDouble();
              this.__isset.altitude = true;
            } else { 
              TProtocolUtil.Skip(iprot, field.Type);
            }
            break;
          case 13:
            if (field.Type == TType.String) {
              this.author = iprot.ReadString();
              this.__isset.author = true;
            } else { 
              TProtocolUtil.Skip(iprot, field.Type);
            }
            break;
          case 14:
            if (field.Type == TType.String) {
              this.source = iprot.ReadString();
              this.__isset.source = true;
            } else { 
              TProtocolUtil.Skip(iprot, field.Type);
            }
            break;
          case 15:
            if (field.Type == TType.String) {
              this.sourceURL = iprot.ReadString();
              this.__isset.sourceURL = true;
            } else { 
              TProtocolUtil.Skip(iprot, field.Type);
            }
            break;
          case 16:
            if (field.Type == TType.String) {
              this.sourceApplication = iprot.ReadString();
              this.__isset.sourceApplication = true;
            } else { 
              TProtocolUtil.Skip(iprot, field.Type);
            }
            break;
          case 17:
            if (field.Type == TType.I64) {
              this.shareDate = iprot.ReadI64();
              this.__isset.shareDate = true;
            } else { 
              TProtocolUtil.Skip(iprot, field.Type);
            }
            break;
          default: 
            TProtocolUtil.Skip(iprot, field.Type);
            break;
        }
        iprot.ReadFieldEnd();
      }
      iprot.ReadStructEnd();
    }

    public void Write(TProtocol oprot) {
      TStruct struc = new TStruct("NoteAttributes");
      oprot.WriteStructBegin(struc);
      TField field = new TField();
      if (__isset.subjectDate) {
        field.Name = "subjectDate";
        field.Type = TType.I64;
        field.ID = 1;
        oprot.WriteFieldBegin(field);
        oprot.WriteI64(this.subjectDate);
        oprot.WriteFieldEnd();
      }
      if (__isset.latitude) {
        field.Name = "latitude";
        field.Type = TType.Double;
        field.ID = 10;
        oprot.WriteFieldBegin(field);
        oprot.WriteDouble(this.latitude);
        oprot.WriteFieldEnd();
      }
      if (__isset.longitude) {
        field.Name = "longitude";
        field.Type = TType.Double;
        field.ID = 11;
        oprot.WriteFieldBegin(field);
        oprot.WriteDouble(this.longitude);
        oprot.WriteFieldEnd();
      }
      if (__isset.altitude) {
        field.Name = "altitude";
        field.Type = TType.Double;
        field.ID = 12;
        oprot.WriteFieldBegin(field);
        oprot.WriteDouble(this.altitude);
        oprot.WriteFieldEnd();
      }
      if (this.author != null && __isset.author) {
        field.Name = "author";
        field.Type = TType.String;
        field.ID = 13;
        oprot.WriteFieldBegin(field);
        oprot.WriteString(this.author);
        oprot.WriteFieldEnd();
      }
      if (this.source != null && __isset.source) {
        field.Name = "source";
        field.Type = TType.String;
        field.ID = 14;
        oprot.WriteFieldBegin(field);
        oprot.WriteString(this.source);
        oprot.WriteFieldEnd();
      }
      if (this.sourceURL != null && __isset.sourceURL) {
        field.Name = "sourceURL";
        field.Type = TType.String;
        field.ID = 15;
        oprot.WriteFieldBegin(field);
        oprot.WriteString(this.sourceURL);
        oprot.WriteFieldEnd();
      }
      if (this.sourceApplication != null && __isset.sourceApplication) {
        field.Name = "sourceApplication";
        field.Type = TType.String;
        field.ID = 16;
        oprot.WriteFieldBegin(field);
        oprot.WriteString(this.sourceApplication);
        oprot.WriteFieldEnd();
      }
      if (__isset.shareDate) {
        field.Name = "shareDate";
        field.Type = TType.I64;
        field.ID = 17;
        oprot.WriteFieldBegin(field);
        oprot.WriteI64(this.shareDate);
        oprot.WriteFieldEnd();
      }
      oprot.WriteFieldStop();
      oprot.WriteStructEnd();
    }

    public override string ToString() {
      StringBuilder sb = new StringBuilder("NoteAttributes(");
      sb.Append("subjectDate: ");
      sb.Append(this.subjectDate);
      sb.Append(",latitude: ");
      sb.Append(this.latitude);
      sb.Append(",longitude: ");
      sb.Append(this.longitude);
      sb.Append(",altitude: ");
      sb.Append(this.altitude);
      sb.Append(",author: ");
      sb.Append(this.author);
      sb.Append(",source: ");
      sb.Append(this.source);
      sb.Append(",sourceURL: ");
      sb.Append(this.sourceURL);
      sb.Append(",sourceApplication: ");
      sb.Append(this.sourceApplication);
      sb.Append(",shareDate: ");
      sb.Append(this.shareDate);
      sb.Append(")");
      return sb.ToString();
    }

  }

}
