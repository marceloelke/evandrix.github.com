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
namespace Evernote.EDAM.NoteStore
{

  [Serializable]
  public partial class NoteEmailParameters : TBase
  {
    private string guid;
    private Evernote.EDAM.Type.Note note;
    private List<string> toAddresses;
    private List<string> ccAddresses;
    private string subject;
    private string message;

    public string Guid
    {
      get
      {
        return guid;
      }
      set
      {
        __isset.guid = true;
        this.guid = value;
      }
    }

    public Evernote.EDAM.Type.Note Note
    {
      get
      {
        return note;
      }
      set
      {
        __isset.note = true;
        this.note = value;
      }
    }

    public List<string> ToAddresses
    {
      get
      {
        return toAddresses;
      }
      set
      {
        __isset.toAddresses = true;
        this.toAddresses = value;
      }
    }

    public List<string> CcAddresses
    {
      get
      {
        return ccAddresses;
      }
      set
      {
        __isset.ccAddresses = true;
        this.ccAddresses = value;
      }
    }

    public string Subject
    {
      get
      {
        return subject;
      }
      set
      {
        __isset.subject = true;
        this.subject = value;
      }
    }

    public string Message
    {
      get
      {
        return message;
      }
      set
      {
        __isset.message = true;
        this.message = value;
      }
    }


    public Isset __isset;
    [Serializable]
    public struct Isset {
      public bool guid;
      public bool note;
      public bool toAddresses;
      public bool ccAddresses;
      public bool subject;
      public bool message;
    }

    public NoteEmailParameters() {
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
            if (field.Type == TType.String) {
              this.guid = iprot.ReadString();
              this.__isset.guid = true;
            } else { 
              TProtocolUtil.Skip(iprot, field.Type);
            }
            break;
          case 2:
            if (field.Type == TType.Struct) {
              this.note = new Evernote.EDAM.Type.Note();
              this.note.Read(iprot);
              this.__isset.note = true;
            } else { 
              TProtocolUtil.Skip(iprot, field.Type);
            }
            break;
          case 3:
            if (field.Type == TType.List) {
              {
                this.toAddresses = new List<string>();
                TList _list95 = iprot.ReadListBegin();
                for( int _i96 = 0; _i96 < _list95.Count; ++_i96)
                {
                  string _elem97 = null;
                  _elem97 = iprot.ReadString();
                  this.toAddresses.Add(_elem97);
                }
                iprot.ReadListEnd();
              }
              this.__isset.toAddresses = true;
            } else { 
              TProtocolUtil.Skip(iprot, field.Type);
            }
            break;
          case 4:
            if (field.Type == TType.List) {
              {
                this.ccAddresses = new List<string>();
                TList _list98 = iprot.ReadListBegin();
                for( int _i99 = 0; _i99 < _list98.Count; ++_i99)
                {
                  string _elem100 = null;
                  _elem100 = iprot.ReadString();
                  this.ccAddresses.Add(_elem100);
                }
                iprot.ReadListEnd();
              }
              this.__isset.ccAddresses = true;
            } else { 
              TProtocolUtil.Skip(iprot, field.Type);
            }
            break;
          case 5:
            if (field.Type == TType.String) {
              this.subject = iprot.ReadString();
              this.__isset.subject = true;
            } else { 
              TProtocolUtil.Skip(iprot, field.Type);
            }
            break;
          case 6:
            if (field.Type == TType.String) {
              this.message = iprot.ReadString();
              this.__isset.message = true;
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
      TStruct struc = new TStruct("NoteEmailParameters");
      oprot.WriteStructBegin(struc);
      TField field = new TField();
      if (this.guid != null && __isset.guid) {
        field.Name = "guid";
        field.Type = TType.String;
        field.ID = 1;
        oprot.WriteFieldBegin(field);
        oprot.WriteString(this.guid);
        oprot.WriteFieldEnd();
      }
      if (this.note != null && __isset.note) {
        field.Name = "note";
        field.Type = TType.Struct;
        field.ID = 2;
        oprot.WriteFieldBegin(field);
        this.note.Write(oprot);
        oprot.WriteFieldEnd();
      }
      if (this.toAddresses != null && __isset.toAddresses) {
        field.Name = "toAddresses";
        field.Type = TType.List;
        field.ID = 3;
        oprot.WriteFieldBegin(field);
        {
          oprot.WriteListBegin(new TList(TType.String, this.toAddresses.Count));
          foreach (string _iter101 in this.toAddresses)
          {
            oprot.WriteString(_iter101);
            oprot.WriteListEnd();
          }
        }
        oprot.WriteFieldEnd();
      }
      if (this.ccAddresses != null && __isset.ccAddresses) {
        field.Name = "ccAddresses";
        field.Type = TType.List;
        field.ID = 4;
        oprot.WriteFieldBegin(field);
        {
          oprot.WriteListBegin(new TList(TType.String, this.ccAddresses.Count));
          foreach (string _iter102 in this.ccAddresses)
          {
            oprot.WriteString(_iter102);
            oprot.WriteListEnd();
          }
        }
        oprot.WriteFieldEnd();
      }
      if (this.subject != null && __isset.subject) {
        field.Name = "subject";
        field.Type = TType.String;
        field.ID = 5;
        oprot.WriteFieldBegin(field);
        oprot.WriteString(this.subject);
        oprot.WriteFieldEnd();
      }
      if (this.message != null && __isset.message) {
        field.Name = "message";
        field.Type = TType.String;
        field.ID = 6;
        oprot.WriteFieldBegin(field);
        oprot.WriteString(this.message);
        oprot.WriteFieldEnd();
      }
      oprot.WriteFieldStop();
      oprot.WriteStructEnd();
    }

    public override string ToString() {
      StringBuilder sb = new StringBuilder("NoteEmailParameters(");
      sb.Append("guid: ");
      sb.Append(this.guid);
      sb.Append(",note: ");
      sb.Append(this.note== null ? "<null>" : this.note.ToString());
      sb.Append(",toAddresses: ");
      sb.Append(this.toAddresses);
      sb.Append(",ccAddresses: ");
      sb.Append(this.ccAddresses);
      sb.Append(",subject: ");
      sb.Append(this.subject);
      sb.Append(",message: ");
      sb.Append(this.message);
      sb.Append(")");
      return sb.ToString();
    }

  }

}
