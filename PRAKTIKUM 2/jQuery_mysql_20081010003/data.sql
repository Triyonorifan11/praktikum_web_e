drop table if exists FAKULTAS;

drop table if exists MAHASISWA;

drop table if exists PROGRAMSTUDI;

/*==============================================================*/
/* Table: FAKULTAS                                              */
/*==============================================================*/
create table FAKULTAS
(
   KODEFAKULTAS         varchar(30) not null,
   FAKULTAS             varchar(30),
   primary key (KODEFAKULTAS)
);

/*==============================================================*/
/* Table: MAHASISWA                                             */
/*==============================================================*/
create table MAHASISWA
(
   NPM                  varchar(30) not null,
   KODEPRODI            varchar(30),
   NAMAMAHASISWA        varchar(30),
   ALAMAT               varchar(30),
   NOTELP               varchar(30),
   primary key (NPM)
);

/*==============================================================*/
/* Table: PROGRAMSTUDI                                          */
/*==============================================================*/
create table PROGRAMSTUDI
(
   KODEPRODI            varchar(30) not null,
   KODEFAKULTAS         varchar(30),
   PRODI                varchar(30),
   primary key (KODEPRODI)
);

alter table MAHASISWA add constraint FK_RELATIONSHIP_1 foreign key (KODEPRODI)
      references PROGRAMSTUDI (KODEPRODI) on delete restrict on update restrict;

alter table PROGRAMSTUDI add constraint FK_RELATIONSHIP_2 foreign key (KODEFAKULTAS)
      references FAKULTAS (KODEFAKULTAS) on delete restrict on update restrict;
