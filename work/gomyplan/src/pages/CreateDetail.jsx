import { useState } from "react";
import styled from "styled-components";

// react-bootstrap
import Card from "react-bootstrap/Card";
import Modal from "react-bootstrap/Modal";

// Swiper
import { Swiper, SwiperSlide } from "swiper/react";
import { Pagination } from "swiper/modules";
import "swiper/css";
import "swiper/css/pagination";

// component
import Header from "../components/Header";
import Footer from "../components/Footer";
import Nav from "../components/Nav";
import PageContainer from "../components/PageContainer";
import PageContent from "../components/PageContent";
import PageBtnbox from "../components/PageBtnbox";
import CountButton from "../components/CountButton";
import BigButton from "../components/BigButton";

// img
import PlanImg from "../assets/img/plan_main.png";
import PlanThum1 from "../assets/img/plan_thum3.png";
import PlanThum2 from "../assets/img/plan_thum4.png";
import PlanThum3 from "../assets/img/plan_thum5.png";
import PlanThum4 from "../assets/img/plan_thum6.png";
import PlanThum5 from "../assets/img/plan_thum7.png";
import Profile from "../assets/img/member_profile.png";
import DetailMain from "../assets/img/detail_main.png";
import Map from "../assets/img/map_img2.png";
import ListIcon from "../assets/img/icon_list.png";
import PlanDetailThum1 from "../assets/img/plan_detail_thum1.png";
import PlanDetailThum2 from "../assets/img/plan_detail_thum2.png";
import PlanDetailThum3 from "../assets/img/plan_detail_thum3.png";
import PlanDetailThum4 from "../assets/img/plan_detail_thum4.png";
import DetailSubimg1 from "../assets/img/detail_subimg1.png";
import DetailSubimg2 from "../assets/img/detail_subimg2.png";
import DetailSubimg3 from "../assets/img/detail_subimg3.png";
import DetailSubimg4 from "../assets/img/detail_subimg4.png";
import DetailSubimg5 from "../assets/img/detail_subimg5.png";

// style
const PlanPhotoBox = styled.div`
  position: relative;
`;

const PlanPhotoImg = styled.div`
  position: relative;
  width: 100%;
  aspect-ratio: 1 / 0.5384615;
  display: flex;
  overflow: hidden;

  img {
    width: 100%;
    height: 100%;
    object-fit: cover;
  }

  &::after {
    content: "";
    position: absolute;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(to bottom, transparent, rgba(0, 0, 0, 0.4));
  }

  .swiper-pagination {
    background: rgba(8, 41, 79, 0.9);
    border-radius: 6px;
    padding: 4px 10px;
    font-weight: 500;
    font-size: 12px;
    line-height: 130%;
    color: var(--color-white);
    width: auto;
    top: 20px;
    bottom: auto;
    left: auto;
    right: 20px;
  }
`;

const PlanContent1 = styled.div`
  padding: 20px;
  border-bottom: 1px solid var(--color-border);
  margin-bottom: 40px;
  display: flex;
  flex-direction: column;
  gap: 20px;
`;

const PlanContent2 = styled.div`
  padding: 0 20px;
  margin-bottom: 40px;

  &:last-child {
    margin-bottom: 60px;
  }
`;

const PlanTitBox = styled.div`
  display: flex;
  flex-direction: column;
  gap: 4px;

  &.cardver {
    gap: 14px;
  }
`;

const PlanTxtTitle = styled.div`
  font-family: var(--second-family);
  font-weight: 600;
  font-size: 16px;
  line-height: 130%;
  color: var(--color-black);
  display: flex;
  align-items: center;
  justify-content: space-between;
  gap: 10px;
  transition: var(--transition);

  &.blue {
    color: var(--color-default);
  }

  span {
    flex: 1;
  }

  .darkMode & {
    color: var(--color-bg2);
  }

  .darkMode &.blue {
    color: var(--color-input);
  }
`;

const PlanTxtTitleBadge = styled.div`
  border-radius: 4px;
  padding: 4px 10px;
  background: var(--color-default);
  font-family: var(--third-family);
  font-weight: 400;
  font-size: 12px;
  line-height: 130%;
  text-align: center;
  color: var(--color-white);
`;

const PlanTxtDesc = styled.div`
  font-weight: 400;
  font-size: 12px;
  line-height: 130%;
  color: var(--color-darkgray);
  transition: var(--transition);

  &.point {
    color: var(--color-point);
  }

  .darkMode & {
    color: var(--color-gray);
  }

  .darkMode &.point {
    color: var(--color-point);
  }
`;

const PlanAttraction = styled.div`
  border-radius: 10px;
  padding: 14px;
  box-shadow: 0 4px 15px 0 rgba(0, 74, 123, 0.2);
  background: var(--color-white);
  margin-top: 6px;
  display: flex;
  flex-direction: column;
  gap: 10px;
  transition: var(--transition);

  .darkMode & {
    background: var(--color-darkgray2);
  }
`;

const CountBtnBox = styled.div`
  width: 100%;
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 10px;
  margin-top: 16px;
`;

const PlanTime = styled.div`
  font-family: var(--font-family);
  font-weight: 500;
  font-size: 12px;
  line-height: 130%;
  color: var(--color-darkgray);
  transition: var(--transition);

  .darkMode & {
    color: var(--color-gray);
  }
`;

const CardList = styled.div`
  display: flex;
`;

const CardIcon = styled.button`
  background: url(${ListIcon}) no-repeat center / contain;
  width: 18px;
  aspect-ratio: 1 / 1;
  position: absolute;
  left: 20px;
  top: 20px;
`;

const ProfileBox = styled.div`
  border-radius: 10px;
  padding: 20px;
  box-shadow: 0 4px 15px 0 rgba(0, 74, 123, 0.2);
  background: var(--color-white);
  display: flex;
  align-items: center;
  gap: 16px;
  transition: var(--transition);

  .darkMode & {
    background: var(--color-darkgray2);
  }
`;

const ProfileImg = styled.img`
  width: 40px;
  aspect-ratio: 1 / 1;
  box-shadow: 0 0 4px 0 rgba(0, 74, 123, 0.4);
  border-radius: 50%;
`;

const ProfileTxtBox = styled.div`
  display: flex;
  flex-direction: column;
  gap: 6xp;
`;

const ProfileTItle = styled.p`
  font-family: var(--second-family);
  font-weight: 600;
  font-size: 16px;
  line-height: 130%;
  color: var(--color-black);
  transition: var(--transition);

  .darkMode & {
    color: var(--color-bg2);
  }
`;

const ProfileDesc = styled.p`
  font-weight: 400;
  font-size: 10px;
  line-height: 130%;
  color: var(--color-darkgray);
  transition: var(--transition);

  .darkMode & {
    color: var(--color-border);
  }
`;

const DetailMainBox = styled.div`
  display: flex;
  flex-direction: column;
  gap: 20px;
  border-bottom: 1px solid var(--color-border);
  padding-bottom: 30px;
  margin-bottom: 10px;
  transition: var(--transition);

  .darkMode & {
    border-color: var(--color-gray);
  }
`;

const DetailMainImg = styled.img`
  width: 100%;
  border-radius: 10px;
`;

const DetailMainTxt = styled.p`
  font-weight: 400;
  font-size: 12px;
  line-height: 130%;
  color: var(--color-darkgray);
  transition: var(--transition);

  .darkMode & {
    color: var(--color-border);
  }
`;

const DetailNotiBox = styled.div`
  width: 100%;
  margin-top: 10px;
  border-bottom: 1px solid var(--color-border);
  padding-bottom: 30px;
  display: flex;
  flex-direction: column;
  gap: 10px;
  transition: var(--transition);

  .darkMode & {
    border-color: var(--color-gray);
  }
`;

const DetailSmallTitle = styled.p`
  font-family: var(--font-family);
  font-weight: 600;
  font-size: 14px;
  line-height: 130%;
  color: var(--color-black);
  transition: var(--transition);

  &.blue {
    color: var(--color-default);
  }

  .darkMode & {
    color: var(--color-bg2);
  }
`;

const DetailNotiList = styled.div`
  display: flex;
  flex-direction: column;
  gap: 14px;
`;

const DetailNotiItem = styled.div`
  position: relative;
  font-weight: 400;
  font-size: 12px;
  line-height: 130%;
  color: var(--color-darkgray);
  padding-left: 0.9em;
  transition: var(--transition);

  &::before {
    content: "";
    border-radius: 100px;
    background: var(--color-point);
    width: 3px;
    aspect-ratio: 1 / 1;
    position: absolute;
    left: 0;
    top: 0.5em;
    transition: var(--transition);
  }

  .darkMode & {
    color: var(--color-border);
  }
`;

const DetailMapBox = styled.div`
  display: flex;
  flex-direction: column;
  gap: 14px;

  img {
    width: 100%;
  }
`;

const DetailSpotBox = styled.div`
  display: flex;
  flex-direction: column;
  gap: 10px;
`;

const DetailSpotList = styled.div`
  display: flex;
  flex-direction: column;
  gap: 20px;
`;

const DetailSpotItem = styled.div`
  display: flex;
  flex-direction: column;
  gap: 8px;
  width: 100%;
`;

const DetailSpotImg = styled.img`
  width: 100%;
  border-radius: 10px;
  margin-bottom: 6px;
`;

const DetailSpotTitle = styled.div`
  font-weight: 600;
  font-size: 14px;
  line-height: 130%;
  color: var(--color-default);
  transition: var(--transition);

  .darkMode & {
    color: var(--color-point);
  }
`;

const DetailSpotDesc = styled.div`
  font-weight: 400;
  font-size: 12px;
  line-height: 130%;
  color: var(--color-darkgray);
  transition: var(--transition);

  .darkMode & {
    color: var(--color-border);
  }
`;

const CreateDetail = () => {
  const [customizeShow, setCustomizeShow] = useState(false);
  const [detailShow, setDetailShow] = useState(false);

  const customizeModalClose = () => setCustomizeShow(false);
  const customizeModalShow = () => setCustomizeShow(true);

  const detailModalClose = () => setDetailShow(false);
  const detailModalShow = () => setDetailShow(true);

  return (
    <>
      {/* Header */}
      <Header type="title" title="Create a Plan" />

      {/* contents */}
      <PageContainer padding="p-0">
        <PageContent>
          <PlanPhotoBox>
            <PlanPhotoImg>
              <Swiper loop={true} speed="500" pagination={{ type: "fraction" }} modules={[Pagination]}>
                <SwiperSlide>
                  <Card.Img src={PlanImg} />
                </SwiperSlide>
                <SwiperSlide>
                  <Card.Img src={PlanImg} />
                </SwiperSlide>
              </Swiper>
            </PlanPhotoImg>
          </PlanPhotoBox>

          <PlanContent1>
            <PlanTitBox>
              <PlanTxtTitle className="blue">
                <span>Hong Kong (3 Days, 2 Nights)</span>
                <PlanTxtTitleBadge>Private</PlanTxtTitleBadge>
              </PlanTxtTitle>
              <PlanTxtDesc>USD $400~</PlanTxtDesc>
            </PlanTitBox>
            <PlanTitBox>
              <PlanTxtTitle>
                <span> Attractions:</span>
              </PlanTxtTitle>
              <PlanAttraction>
                <PlanTxtDesc>Temple Street, Peak Tram, Victoria Peak, Symphony of Lights</PlanTxtDesc>
                <PlanTxtDesc className="point">*4 people recommended for this plan*</PlanTxtDesc>
              </PlanAttraction>
              <CountBtnBox>
                <CountButton type="like" count="999" active="active"></CountButton>
                <CountButton type="chat" count="0"></CountButton>
                <CountButton type="share" count="0"></CountButton>
              </CountBtnBox>
            </PlanTitBox>
          </PlanContent1>

          <PlanContent2>
            <PlanTitBox className="cardver">
              <PlanTxtTitle>
                <span>Day 1</span>
                <PlanTime>2023.09.05 (Tuesday)</PlanTime>
              </PlanTxtTitle>
              <div className="cardList">
                <Card>
                  <Card.Img onClick={detailModalShow} src={PlanThum1} />
                  <Card.Body>
                    <div className="card_top">
                      <div className="card_time">
                        <span className="icon"></span>
                        <span className="txt">17:00</span>
                      </div>
                      {/* <div className="card_badge">Custom</div> */}
                    </div>
                    <div className="card_content">
                      <Card.Title onClick={detailModalShow}>Airport → Tsim Sha Tsui Express Bus (1PM 2PM)</Card.Title>
                      <Card.Text>After arriving in Hong Kong, transfer to your hotel comfortably.</Card.Text>
                    </div>
                    <div className="infobox">
                      <div className="left flex">
                        <BigButton onClick={detailModalShow}>Details</BigButton>
                        <BigButton onClick={customizeModalShow}>Change</BigButton>
                      </div>
                      <div className="right">
                        <p className="price_wrap">
                          Per person
                          <span className="price">USD $10</span>
                        </p>
                        <p className="price_desc">*Total up to 4 people*</p>
                      </div>
                    </div>
                  </Card.Body>
                </Card>
                <Card>
                  <Card.Img onClick={detailModalShow} src={PlanThum2} />
                  <Card.Body>
                    <div className="card_top">
                      <div className="card_time">
                        <span className="icon"></span>
                        <span className="txt">19:00</span>
                      </div>
                      {/* <div className="card_badge">Custom</div> */}
                    </div>
                    <div className="card_content">
                      <Card.Title onClick={detailModalShow}>Million Dollar Night Tour</Card.Title>
                      <Card.Text>Publish PlanHong Kong’s beautiful night view with a knowledgeable guide</Card.Text>
                    </div>
                    <div className="infobox">
                      <div className="left flex">
                        <BigButton onClick={detailModalShow}>Details</BigButton>
                        <BigButton onClick={customizeModalShow}>Change</BigButton>
                      </div>
                      <div className="right">
                        <p className="price_wrap">
                          Per person
                          <span className="price">USD $40</span>
                        </p>
                        <p className="price_desc">*Total up to 1 people*</p>
                      </div>
                    </div>
                  </Card.Body>
                </Card>
                <Card>
                  <Card.Img onClick={detailModalShow} src={PlanThum3} />
                  <Card.Body>
                    <div className="card_top">
                      <div className="card_time">
                        <span className="icon"></span>
                        <span className="txt">19:00</span>
                      </div>
                      {/* <div className="card_badge">Custom</div> */}
                    </div>
                    <div className="card_content">
                      <Card.Title onClick={detailModalShow}>The Salisbury YMCA of Hong Kong</Card.Title>
                      <Card.Text>Located suitable spot in the tourist area of Tsim Sha Tsui, recently renovated.</Card.Text>
                    </div>
                    <div className="infobox">
                      <div className="left flex">
                        <BigButton onClick={detailModalShow}>Details</BigButton>
                        <BigButton onClick={customizeModalShow}>Change</BigButton>
                      </div>
                      <div className="right">
                        <p className="price_wrap">
                          Per person
                          <span className="price">USD $80</span>
                        </p>
                        <p className="price_desc">*Total up to 2 people*</p>
                      </div>
                    </div>
                  </Card.Body>
                </Card>
              </div>
            </PlanTitBox>
          </PlanContent2>

          <PlanContent2>
            <PlanTitBox className="cardver">
              <PlanTxtTitle>
                <span>Day 2</span>
                <PlanTime>2023.09.06 (Wednesday)</PlanTime>
              </PlanTxtTitle>
              <div className="cardList">
                <Card>
                  <Card.Img onClick={detailModalShow} src={PlanThum4} />
                  <Card.Body>
                    <div className="card_top">
                      <div className="card_time">
                        <span className="icon"></span>
                        <span className="txt">19:00</span>
                      </div>
                      {/* <div className="card_badge">Custom</div> */}
                    </div>
                    <div className="card_content">
                      <Card.Title onClick={detailModalShow}>All-Day Free Itinerary</Card.Title>
                      <Card.Text>Explore Hong Kong on your own and add various options to personalize your plan!</Card.Text>
                    </div>
                    <div className="infobox">
                      <div className="left flex">
                        <BigButton onClick={detailModalShow}>Details</BigButton>
                        <BigButton onClick={customizeModalShow}>Change</BigButton>
                      </div>
                      <div className="right">
                        <p className="price_wrap">
                          Per person
                          <span className="price">USD $0</span>
                        </p>
                        <p className="price_desc">*Total up to 1 people*</p>
                      </div>
                    </div>
                  </Card.Body>
                </Card>
                <Card>
                  <Card.Img onClick={detailModalShow} src={PlanThum3} />
                  <Card.Body>
                    <div className="card_top">
                      <div className="card_time">
                        <span className="icon"></span>
                        <span className="txt">19:00</span>
                      </div>
                      {/* <div className="card_badge">Custom</div> */}
                    </div>
                    <div className="card_content">
                      <Card.Title onClick={detailModalShow}>The Salisbury YMCA of Hong Kong</Card.Title>
                      <Card.Text>Located suitable spot in the tourist area of Tsim Sha Tsui, recently renovated.</Card.Text>
                    </div>
                    <div className="infobox">
                      <div className="left flex">
                        <BigButton onClick={detailModalShow}>Details</BigButton>
                        <BigButton onClick={customizeModalShow}>Change</BigButton>
                      </div>
                      <div className="right">
                        <p className="price_wrap">
                          Per person
                          <span className="price">USD $80</span>
                        </p>
                        <p className="price_desc">*Total up to 2 people*</p>
                      </div>
                    </div>
                  </Card.Body>
                </Card>
              </div>
            </PlanTitBox>
          </PlanContent2>

          <PlanContent2>
            <PlanTitBox className="cardver">
              <PlanTxtTitle>
                <span>Day 3</span>
                <PlanTime>2023.09.07 (Thursday)</PlanTime>
              </PlanTxtTitle>
              <div className="cardList">
                <Card>
                  <Card.Img onClick={detailModalShow} src={PlanThum5} />
                  <Card.Body>
                    <div className="card_top">
                      <div className="card_time">
                        <span className="icon"></span>
                        <span className="txt">97:00</span>
                      </div>
                      {/* <div className="card_badge">Custom</div> */}
                    </div>
                    <div className="card_content">
                      <Card.Title onClick={detailModalShow}>Individual Departure after Free Itinerary</Card.Title>
                      <Card.Text>Check out our options to make your departure more convenient!</Card.Text>
                    </div>
                    <div className="infobox">
                      <div className="left flex">
                        <BigButton onClick={detailModalShow}>Details</BigButton>
                        <BigButton onClick={customizeModalShow}>Change</BigButton>
                      </div>
                      <div className="right">
                        <p className="price_wrap">
                          Per person
                          <span className="price">USD $10</span>
                        </p>
                        <p className="price_desc">*Total up to 4 people*</p>
                      </div>
                    </div>
                  </Card.Body>
                </Card>
              </div>
            </PlanTitBox>
          </PlanContent2>
        </PageContent>
        <PageBtnbox>
          <BigButton className="ver2">Continue Editing</BigButton>
          <BigButton>Publish Plan</BigButton>
        </PageBtnbox>
      </PageContainer>

      {/* Footer */}
      <Footer />

      {/* Navigation */}
      <Nav />

      {/* Customize Modal */}
      <Modal show={customizeShow} onHide={customizeModalClose} className="type1">
        <Modal.Header closeButton>
          <Modal.Title>Macau 5-Hour Afternoon Tour</Modal.Title>
        </Modal.Header>
        <Modal.Body>
          <CardList className="cardList ver2">
            <Card>
              <Card.Img src={PlanDetailThum1} />
              <CardIcon></CardIcon>
              <Card.Body>
                <div className="card_content">
                  <Card.Title>Free Itinerary</Card.Title>
                  <Card.Text>Add various options to complete your plan!</Card.Text>
                </div>
                <div className="infobox">
                  <div className="right">
                    <p className="price_wrap">
                      Per person
                      <span className="price">USD $0</span>
                    </p>
                  </div>
                </div>
              </Card.Body>
            </Card>
            <Card>
              <Card.Img src={PlanDetailThum2} />
              <CardIcon></CardIcon>
              <Card.Body>
                <div className="card_content">
                  <Card.Title>Lorem Ipsum Dolor Sit Amet</Card.Title>
                  <Card.Text>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce turpis justo, iaculis in felis id, cursus dapibus nisi. Duis luctus
                    tincidunt odio eget maximus. Nam a risus eget enim interdum congue nec ut lectus consequat pellentesque.
                  </Card.Text>
                </div>
                <div className="infobox">
                  <div className="right">
                    <p className="price_wrap">
                      Per person
                      <span className="price">USD $30</span>
                    </p>
                  </div>
                </div>
              </Card.Body>
            </Card>
            <Card>
              <Card.Img src={PlanDetailThum3} />
              <CardIcon></CardIcon>
              <Card.Body>
                <div className="card_content">
                  <Card.Title>Lorem Ipsum Dolor Sit Amet</Card.Title>
                  <Card.Text>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce turpis justo, iaculis in felis id, cursus dapibus nisi. Duis luctus
                    tincidunt odio eget maximus. Nam a risus eget enim interdum congue nec ut lectus consequat pellentesque.
                  </Card.Text>
                </div>
                <div className="infobox">
                  <div className="right">
                    <p className="price_wrap">
                      Per person
                      <span className="price">USD $10</span>
                    </p>
                  </div>
                </div>
              </Card.Body>
            </Card>
            <Card>
              <Card.Img src={PlanDetailThum4} />
              <CardIcon></CardIcon>
              <Card.Body>
                <div className="card_content">
                  <Card.Title>Lorem Ipsum Dolor Sit Amet</Card.Title>
                  <Card.Text>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce turpis justo, iaculis in felis id, cursus dapibus nisi. Duis luctus
                    tincidunt odio eget maximus. Nam a risus eget enim interdum congue nec ut lectus consequat pellentesque.
                  </Card.Text>
                </div>
                <div className="infobox">
                  <div className="right">
                    <p className="price_wrap">
                      Per person
                      <span className="price">USD $30</span>
                    </p>
                  </div>
                </div>
              </Card.Body>
            </Card>
          </CardList>
        </Modal.Body>
        <Modal.Footer className="border_none">
          <BigButton onClick={customizeModalClose}>Customize</BigButton>
        </Modal.Footer>
      </Modal>

      {/* Detail Modal */}
      <Modal show={detailShow} onHide={detailModalClose} className="type1">
        <Modal.Header closeButton>
          <Modal.Title>Macau 5-Hour Afternoon Tour</Modal.Title>
        </Modal.Header>
        <Modal.Body>
          <DetailMainBox>
            <DetailMainImg src={DetailMain}></DetailMainImg>
            <DetailMainTxt>
              What if you plan to spend 5 hours in Macau?? We will pick out the key points and show you everything in a half day!
              <br /> <br />
              You can see the world cultural heritage area where Portuguese history and culture that began in the 16th century + the casino resort and night
              view in one day
              <br /> <br />
              Dinner is not included. However, the guide will do his best to help you with everything from meal information to the subsequent schedule.
              <br /> <br />
              Meeting time: 3:30 PM (Macau local time)
            </DetailMainTxt>
          </DetailMainBox>

          <ProfileBox>
            <ProfileImg src={Profile}></ProfileImg>
            <ProfileTxtBox>
              <ProfileTItle>GoGoHongKong</ProfileTItle>
              <ProfileDesc>
                This is a 4 days and 3 nights plan to enjoy with family, friends, and lovers (in collaboration with 500,000 YouTuber Moochul Couple)
              </ProfileDesc>
            </ProfileTxtBox>
          </ProfileBox>

          <DetailNotiBox>
            <DetailSmallTitle>Tour Notice</DetailSmallTitle>
            <DetailNotiList>
              <DetailNotiItem>
                This is a walking tour using public transportation. There may be large crowds at the tourist attractions you visit during the itinerary, so
                please wear as light clothing as possible.
              </DetailNotiItem>
              <DetailNotiItem>This option includes walking distance, including stairs. We recommend wearing comfortable shoes.</DetailNotiItem>
              <DetailNotiItem>
                lease go to the designated meeting location 10 minutes in advance and wait. Refunds are not possible for no-shows or late arrivals after the
                option has started.
              </DetailNotiItem>
            </DetailNotiList>
          </DetailNotiBox>

          <DetailMapBox>
            <PlanTxtTitle>
              <span>View on Google Maps:</span>
            </PlanTxtTitle>
            <img src={Map} />
          </DetailMapBox>

          <DetailSpotBox>
            <PlanTxtTitle>
              <span>Spot(s) Visiting:</span>
            </PlanTxtTitle>
            <DetailSpotList>
              <DetailSpotItem>
                <DetailSpotImg src={DetailSubimg1}></DetailSpotImg>
                <DetailSpotTitle>1. The Outer Harbour Ferry Terminal </DetailSpotTitle>
                <DetailSpotDesc>
                  Please find your guide on the 1st floor of Macau Outer Ferry Terminal, in front of the Tourist Information Center.
                </DetailSpotDesc>
              </DetailSpotItem>
              <DetailSpotItem>
                <DetailSpotImg src={DetailSubimg2}></DetailSpotImg>
                <DetailSpotTitle>2. Rua de Felicidade</DetailSpotTitle>
                <DetailSpotDesc>
                  Rua da Felicidade (literally translated as ‘Street of Happiness’) was once the heart of Macau’s red light district, which is how it got its
                  name. Nowadays, Rua da Felicidade is not only an authentic shopping street where you can buy local products, but there are also several local
                  restaurants serving Cantonese and Macanese food, including soup noodles, yum cha delicacies, and more. Other traditional shops include
                  products such as tea, dried meat, typical sweets and desserts, among others.
                </DetailSpotDesc>
              </DetailSpotItem>
              <DetailSpotItem>
                <DetailSpotImg src={DetailSubimg3}></DetailSpotImg>
                <DetailSpotTitle>3. Senado Square</DetailSpotTitle>
                <DetailSpotDesc>
                  Senado Square or Senate Square (Portuguese: Largo do Senado, Chinese: 議事亭前地, Cantonese Yale: Yíh Sih Tìhng Chìhn Deih) is a town square
                  in Macau, China, and part of the UNESCO Historic Center. Macau World Cultural Heritage. It is shaped like an elongated triangle and connects
                  Largo do São Domingos at one end and Avenida de Almeida Ribeiro at the other. It covers an area of 3,700 square meters (4,425 square yards).
                </DetailSpotDesc>
              </DetailSpotItem>
              <DetailSpotItem>
                <DetailSpotImg src={DetailSubimg4}></DetailSpotImg>
                <DetailSpotTitle>4. Saint Dominic&apos;s Church</DetailSpotTitle>
                <DetailSpotDesc>
                  The Church of St. Dominic (Chinese: 板樟堂, Portuguese: Igreja de São Domingos) is a late 16th-century Baroque church serving the cathedral
                  parish of the Roman Catholic Diocese of Macau. It is located in the peninsula part of the city in Largo de São Domingos, near the Leal Senado
                  building.
                </DetailSpotDesc>
              </DetailSpotItem>
              <DetailSpotItem>
                <DetailSpotImg src={DetailSubimg5}></DetailSpotImg>
                <DetailSpotTitle>5. The Ruins of Saint Paul&apos;s</DetailSpotTitle>
                <DetailSpotDesc>
                  The Ruins of St. Paul&apos;s (Chinese: 大三巴牌坊, Portuguese: Ruínas de São Paulo) are the remains of a 17th-century Portuguese cathedral in
                  Macau, dedicated to Saint Paul, an apostle of Jesus. It is the most famous historical building.
                </DetailSpotDesc>
              </DetailSpotItem>
            </DetailSpotList>
          </DetailSpotBox>
        </Modal.Body>
      </Modal>
    </>
  );
};

export default CreateDetail;
